<?php

namespace App\Form;

use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType as TypeDateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', null, [
                'constraints' => [
                    new Assert\NotBlank(), 
                    new Assert\Length(['min' => 5, 
                    'max' => 100,
                    'minMessage' => 'Le titre doit contenir au moins {{ 5 }} caractères.',
                    'maxMessage' => 'Le titre ne peut pas dépasser {{ 30 }} caractères.']), 
                ],
                'validation_groups' => ['Default'], // Activation des contraintes de validation
            ])
            ->add('contenuPub', null, [
                'constraints' => [
                    new Assert\NotBlank(), // Le champ ne doit pas être vide
                    new Assert\Length(['min' => 10,
                    'minMessage' => 'Le contenu doit contenir au moins {{ 10 }} caractères.']), // La longueur minimale est de 10 caractères
                    // Ajoutez d'autres contraintes si nécessaire
                ],
            ])

            ->add('datePub', HiddenType::class, [
                'mapped' => false, // Supprime la liaison automatique avec l'entité
            ])
            ->add('file', FileType::class, [
                'label' => 'Fichier',
                'data_class' => null,
                'required' => false, // Facultatif, si le téléchargement de fichier n'est pas obligatoire
                'mapped' => true, // Si vous ne stockez pas directement le fichier dans l'entité Post
                'attr' => ['accept' => '.jpg,.jpeg,.png,.gif'] // Spécifiez les types de fichiers acceptés
            ])
            ->add('save', SubmitType::class)


            ->add('likes', HiddenType::class, ['attr' => ['value' => '0']])
            ->add('dislikes', HiddenType::class, ['attr' => ['value' => '0']])




            ->add('comments', CollectionType::class, [
                'entry_type' => CommentType::class,
                'allow_add' => true,
                'by_reference' => false,
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
