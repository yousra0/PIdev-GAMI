<?php

namespace App\Form;

use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType as TypeDateType;
use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('contenuComment', null, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(['min' => 5, 'max' => 255,
                    'minMessage' => 'Le titre doit contenir au moins {{ 5 }} caractères.',
                    'maxMessage' => 'Le titre ne peut pas dépasser {{ 30 }} caractères.']),

                ],
            ])

            ->add('dateComment', HiddenType::class, [
                'mapped' => false, // Supprime la liaison automatique avec l'entité
            ])

            

            ->add('save', SubmitType::class, [
                'label' => 'Enregistrer', // Texte du bouton de soumission
                'attr' => ['class' => 'button button5'] // Classe CSS à appliquer au bouton
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }

    
}
