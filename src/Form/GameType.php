<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Game;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints as assert;


class GameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'constraints' => [
                  new Assert\NotBlank(),
                  new Assert\Length(['max' => 20]),
              ],
         ])
            ->add('description', TextType::class,[
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Length(['max' => 50]),
                ],
            ])
            ->add('date')
            ->add('image', FileType::class, [
                'label' => 'Fichier',
                'data_class' => null,
                'required' => false, // Facultatif, si le téléchargement de fichier n'est pas obligatoire
                'mapped' => true, // Si vous ne stockez pas directement le fichier dans l'entité Post
                'attr' => ['accept' => '.jpg,.jpeg,.png,.gif'] // Spécifiez les types de fichiers acceptés
            ])
            ->add('lien', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(),
                    new Assert\Url(['message' => 'Veuillez entrer une URL valide.']),
                ],
            ])
            ->add('categorie',EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'name',   
                'multiple' => false,
                'expanded' => false
              ])
            ->add('save',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Game::class,
        ]);
    }
}
