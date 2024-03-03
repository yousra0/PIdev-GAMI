<?php

namespace App\Form;

use App\Entity\Order;
use App\Entity\Product;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\FileType; // Import FileType
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Type;

class Product1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reference', null, [
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[a-zA-Z0-9]+$/',
                        'message' => 'Reference can only contain alphanumeric characters.',
                    ]),
                    new NotBlank(['message' => 'Reference cannot be blank.']),
                ],
            ])
            ->add('name', null, [
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'Name can only contain alphabetic characters.',
                    ]),
                    new NotBlank(['message' => 'Name cannot be blank.']),
                ],
            ])
            ->add('description', null, [
                'constraints' => [
                    new Type([
                        'type' => 'string',
                        'message' => 'Description must be a string.',
                    ]),
                ],
            ])
            ->add('price', null, [
                'constraints' => [
                    new Regex([
                        'pattern' => '/^\d+$/',
                        'message' => 'Price can only contain numeric characters.',
                    ]),
                    new NotBlank(['message' => 'Price cannot be blank.']),
                ],
            ])
            ->add('image', FileType::class, [
                'label' => 'Product Image',
                'data_class' => null,
                'required' => false, // Optional, if file upload is not mandatory
                'mapped' => true, // If you're not storing the file directly in the entity
                'attr' => ['accept' => '.jpg,.jpeg,.png,.gif'], // Specify accepted file types
            ])
            ->add('save', SubmitType::class)
            ->add('delete', ButtonType::class, [
                'label' => 'Delete',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
