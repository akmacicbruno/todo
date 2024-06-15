<?php

namespace App\Form;

use App\Entity\Task;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TaskFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => "Title",
                'attr' => [
                    'class' => 'form-control form_item',
                    'placeholder' => 'Enter title for your new task',
                    'maxlength' => 50
                ],
            ])
            ->add('description', TextType::class, [
                'label' => "Description",
                'attr' => [
                    'class' => 'form-control form_item',
                    'placeholder' => 'Describe your new task (optional)',
                    'maxlength' => 500
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}
