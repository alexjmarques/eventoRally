<?php

namespace App\Form;

use App\Entity\DadosMedicos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DadosMedicosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipoSanguineo',  ChoiceType::class, [
                'choices'  => [
                    'A+' => 'a+',
                    'A-' => 'a-',
                    'B+' => 'b+',
                    'B-' => 'b-',
                    'AB+' => 'ab+',
                    'AB-' => 'ab-',
                    'O+' => 'o+',
                    'O-' => 'o-'
                ], 'label' => "Tipo Sanguíneo"
            ])
            ->add('possuiAlergia', ChoiceType::class, [
                'choices'  => [
                    'Não' => 'N',
                    'Sim' => 'S',
                ],
            ])
            ->add('possuiDoenca', ChoiceType::class, [
                'choices'  => [
                    'Não' => 'N',
                    'Sim' => 'S',
                ],
            ])
            ->add('tomaMedicamento', ChoiceType::class, [
                'choices'  => [
                    'Não' => 'N',
                    'Sim' => 'S',
                ],
            ])
            ->add('nomePlanoSaude', TextType::class, array('label' => "Plano de Saúde"))
            ->add('telefonePlanoSaude', TextType::class, array('label' => "Telefone"))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DadosMedicos::class,
        ]);
    }
}
