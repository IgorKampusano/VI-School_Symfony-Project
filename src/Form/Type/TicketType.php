<?php

namespace App\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class TicketType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('surname', ChoiceType::class, [
                'choices' => [
                    'flight' => ''
                ])
            ->add('date', DateType::class, ['label' => 'Дата'])
            ->add('patronymic', TextType::class, ['label' => 'Отчество'])
            ->add('passport_series', TextType::class, ['label' => 'Серия'])
            ->add('passport_number', TextType::class, ['label' => 'Номер'])
            ->add('save', SubmitType::class, ['label' => 'Добавить']);
    }
}