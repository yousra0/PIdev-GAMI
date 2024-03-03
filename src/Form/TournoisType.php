<?php

namespace App\Form;

use App\Entity\Tournois;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class TournoisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
        ->add('date', DateTimeType::class, [
            'widget' => 'single_text',
            'html5' => true,
        ]) 
            ->add('jeu', null, [
                'constraints' => [
                    new Assert\NotBlank(), // Le champ ne doit pas être vide
                ],
            ])
            ->add('logo', FileType::class, [
                'label' => 'Fichier',
                'data_class' => null,
                'required' => false, // Facultatif, si le téléchargement de fichier n'est pas obligatoire
                'mapped' => true, // Si vous ne stockez pas directement le fichier dans l'entité Post
                'attr' => ['accept' => '.jpg,.jpeg,.png,.gif'] // Spécifiez les types de fichiers acceptés
            ])
            ->add('recomponse')
           
            
            ->add('regle', TextareaType::class, [
                'label' => 'Règle', // Optional: Specify a label for the field
                'required' => false, // Optional: Set it to true if the field is required
                'attr' => [
                    'rows' => 6, // Specify the number of visible rows
                    'class' => 'bigger-textarea', // Add a custom class for styling
                ],
            ])
            ->add('nb_equipe', IntegerType::class, [
                'constraints' => [
                    new Assert\LessThanOrEqual([
                        'value' => 4,
                        'message' => 'Le nombre d\'équipes ne peut pas dépasser 4.',
                    ]),
                ],
            ])
            ->add('save', SubmitType::class)
        ;
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $form = $event->getForm();
            $data = $form->getData();
            
            // Vérifier que la date est postérieure à la date actuelle
            if ($data->getDate() < new \DateTime()) {
                $form->get('date')->addError(new FormError('La date doit être ultérieure à la date actuelle.'));
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tournois::class,
        ]);
    }
}
