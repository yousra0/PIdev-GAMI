<?php

namespace App\Form;
use App\Entity\Reponse;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType as TypeDateType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('TitreRec', null, [
                'constraints' => [
                    new Assert\NotBlank(), 
                    new Assert\Length(['min' => 5, 
                    'max' => 100,
                    'minMessage' => 'Le titre doit contenir au moins {{ 5 }} caractères.',
                    'maxMessage' => 'Le titre ne peut pas dépasser {{ 30 }} caractères.']), 
                ],
                'validation_groups' => ['Default'], // Activation des contraintes de validation
            ])

            ->add('ContenuRec', null, [
                'constraints' => [
                    new Assert\NotBlank(), // Le champ ne doit pas être vide
                    new Assert\Length(['min' => 10,
                    'minMessage' => 'Le contenu doit contenir au moins {{ 10 }} caractères.']), // La longueur minimale est de 10 caractères
                    // Ajoutez d'autres contraintes si nécessaire
                ],
            ])

            ->add('DateRec', HiddenType::class, [
                'mapped' => false, // Supprime la liaison automatique avec l'entité
            ])

            ->add('reponses', CollectionType::class, [
                'entry_type' => ReponseType::class,
                'allow_add' => true,
                'by_reference' => false,
            ])
            
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
