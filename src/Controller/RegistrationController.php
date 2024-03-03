<?php

namespace App\Controller;
use App\Repository\UserRepository;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\EmailVerifier;
use Symfony\Component\Mailer\MailerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;

use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;
    private $verifyEmailHelper;
    private $mailer;

    public function __construct(EmailVerifier $emailVerifier, VerifyEmailHelperInterface $helper, MailerInterface $mailer)
    {
        $this->emailVerifier = $emailVerifier;
        $this->verifyEmailHelper = $helper;
        $this->mailer = $mailer;
    }

    #[Route('/register', name: 'app_register', methods: ['GET', 'POST'])]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('pprofile')->getData();
            // encode the plain password
            if ($file) {
                $filename = uniqid() . '.' . $file->guessExtension();

                // Move the file to the directory where brochures are stored
                $file->move(
                    'userImages',
                    $filename
                );

                // Update the 'image' property to store the image file name
                // instead of its contents
                $user->setPprofile($filename);
            }
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $signatureComponents = $this->verifyEmailHelper->generateSignature(
                'app_verify_email',
                $user->getId(),
                $user->getEmail()
            );
            $email = new TemplatedEmail();
            $email->subject('Veuillez confirmer votre email');
            $email->from('mohamedyassine.khlaf@esprit.tn');
            $email->to($user->getEmail());
            $email->htmlTemplate('registration/confirmation_email.html.twig');
            $email->context(['signedUrl' => $signatureComponents->getSignedUrl(),
             
                'nom' => $user->getNom(),
                ]);
            //$email->context(['nom' => $user->getNom()]);
            $this->mailer->send($email);
            //$logger->debug('The signed URL is: ' . $signatureComponents->getSignedUrl());
            //dump($logger);
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/verify/email', name: 'app_verify_email')]
public function verifyUserEmail(Request $request, UserRepository $userRepository, TranslatorInterface $translator): Response
{
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
    $user = $this->getUser();

    try {
        $this->verifyEmailHelper->validateEmailConfirmation($request->getUri(), $user->getId(), $user->getEmail());

        $user->setIsVerified(true);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash('success', 'Your email address has been verified.');

    } catch (VerifyEmailExceptionInterface $exception) {
        $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));
    }

    return $this->redirectToRoute('app_register');
}
}
