<?php

namespace App\Form\Type;

use App\DTO\PassengerDTO;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PassengerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('surname', TextType::class, ['label' => 'Фамилия'])
            ->add('name', TextType::class, ['label' => 'Имя'])
            ->add('patronymic', TextType::class, ['label' => 'Отчество'])
            ->add('passport_series', TextType::class, ['label' => 'Серия'])
            ->add('passport_number', TextType::class, ['label' => 'Номер'])
            ->add('save', SubmitType::class, ['label' => 'Добавить']);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PassengerDTO::class,
        ]);
    }
}