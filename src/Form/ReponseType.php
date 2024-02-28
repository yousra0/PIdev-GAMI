<?php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Reponse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ReponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('ContenuRep', null, [
                'constraints' => [
                    new Assert\NotBlank(), // Le champ ne doit pas être vide
                    new Assert\Length(['min' => 10,
                    'minMessage' => 'Le contenu doit contenir au moins {{ 10 }} caractères.']), // La longueur minimale est de 10 caractères
                    // Ajoutez d'autres contraintes si nécessaire
                ],
            ])
            ->add('DateRep', HiddenType::class, [
                'mapped' => false, // Supprime la liaison automatique avec l'entité
            ])       
            ->add('save', SubmitType::class)

            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reponse::class,
        ]);
    }
}
