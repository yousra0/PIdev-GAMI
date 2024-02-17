<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PasswordCharacterConstraint extends Constraint
{
    public $message = 'The password must contain at least one digit, one uppercase letter, one lowercase letter, and be at least 8 characters long.';
}

class PasswordCharacterConstraintValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/', $value)) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }
}

class User1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null, [
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('prenom', null, [
                'constraints' => [
                    new Assert\NotBlank(),
                ],
            ])
            ->add('MDP', PasswordType::class, [
                'constraints' => [
                    new PasswordCharacterConstraint(),
                ],
            ])
            ->add('email', EmailType::class, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'The email field cannot be empty.']),
                    new Email(['message' => 'The email "{{ value }}" is not a valid email.']),
                ],
            ])
            ->add('pays')
            ->add('date', DateType::class, [
                'years' => range(1950, date('Y')),
                'format' => 'dd-MM-yyyy',
            ])
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'Admin' => 'admin',
                    'User' => 'user',
                ],
            ])
            ->add('save', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
