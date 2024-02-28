<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Game;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
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
                'required' => false,
                'mapped' => true,
                'attr' => ['accept' => '.jpg,.jpeg,.png,.gif'],
                'constraints' => [
                    new Assert\File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/gif',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image file (jpg, png, gif)',
                    ]),
                    new Assert\NotBlank([
                        'message' => 'Please upload an image file',
                    ]),
                ],
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
