<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\UserEditType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use DateTime;
#[Route('/user')]
class UserController extends AbstractController
{

    #[Route('/banned', name: 'app_banned', methods: ['POST','GET'])]
    public function banned(): Response
    {
        return $this->render('404notfound.html.twig');
    }

    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();
        $users1624 = 0;
        $users2534 = 0;
        $users3544 = 0;
        $users45 = 0;
        foreach ($users as $user) {

            $userBirthdate = $user->getDatenai();
            $currentDate = new DateTime();
            $interval = $currentDate->diff($userBirthdate);
            $userAge = $interval->y;

            if ($userAge >= 16 && $userAge <= 24) {
                $users1624++;
            } elseif ($userAge >= 25 && $userAge <= 34) {
                $users2534++;
            } elseif ($userAge >= 35 && $userAge <= 44) {
                $users3544++;
            } elseif ($userAge >= 45) {
                $users45++;
            }
        }

        $totalVerif = $userRepository->countVerifiedUsers();
        $totalUser = $userRepository->count([]);
        $percUser = $totalUser > 0 ? ($totalVerif / $totalUser) * 100 : 0;

        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
            'users1624' => $users1624,
            'percUser' => $percUser,
            'users2534' => $users2534,
            'users3544' => $users3544,
            'users45' => $users45,
        ]);
    }
    #[Route('/export', name: 'export_excel', methods: ['GET'])]
public function export(UserRepository $userRepository): Response
{
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Set the header row
    $sheet->setCellValue('A1', 'ID');
    $sheet->setCellValue('B1', 'Email');
    $sheet->setCellValue('C1', 'Nom');
    $sheet->setCellValue('D1', 'Prenom');
    $sheet->setCellValue('E1', 'Pays');
    $sheet->setCellValue('F1', 'Date Naissance');
    $sheet->setCellValue('G1', 'Roles');
    $sheet->setCellValue('H1', 'Verified');

    // Fetch users from the database
    $users = $userRepository->findAll();

    // Fill the spreadsheet with user data
    $row = 2;
    foreach ($users as $user) {
        $sheet->setCellValue('A' . $row, $user->getId());
        $sheet->setCellValue('B' . $row, $user->getEmail());
        $sheet->setCellValue('C' . $row, $user->getNom());
        $sheet->setCellValue('D' . $row, $user->getPrenom());
        $sheet->setCellValue('E' . $row, $user->getPays());
        $sheet->setCellValue('F' . $row, $user->getDatenai()->format('Y-m-d'));
        $sheet->setCellValue('G' . $row, implode(', ', $user->getRoles()));
        $sheet->setCellValue('H' . $row, $user->isVerified() ? 'Yes' : 'No');
        $row++;
    }

    // Create the Excel file
    $writer = new Xlsx($spreadsheet);
    $fileName = 'users.xlsx';
    $temp_file = tempnam(sys_get_temp_dir(), $fileName);
    $writer->save($temp_file);

    // Return the Excel file as a download
    return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
}

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    #[Route('/profile', name: 'profile', methods: ['GET'])]
    public function profile(): Response
    {
        return $this->render('user/profile.html.twig');
    }
    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
   
    #[Route('/backend/{id}', name: 'back_user_ban', methods: ['GET', 'POST'])]
    public function ban(User $user, UserRepository $userRepository, Request $request2, Request $request,  EntityManagerInterface $entityManager): Response
    {
        //////////////////////
        
        if ($user->isIsBanned() == 0) {
            $user->setIsBanned(1);
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        } else {
            $user->setIsBanned(0);
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }
    }
    #[Route('/update/{id}', name: 'update_profile', methods: ['GET', 'POST'])]
    public function updateprofile(Request $request, User $user, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        //$joueur = $joueurRepository->find($joueur->getId());
        $form = $this->createForm(UserEditType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('pprofile')->getData()) {
                $file = $form->get('pprofile')->getData();

                // If a file was uploaded
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
            } else {
                // Keep the old profile picture
                $user->setPprofile($user->getPprofile());
            }
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('profile', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/update.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }









    
}
