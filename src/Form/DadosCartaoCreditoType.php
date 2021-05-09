<?php

namespace App\Form;

use App\Payment\PagSeguro\Dto\DadosCartaoCreditoDto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class PagSeguroBoletoType
 * @package App\Form
 */
class DadosCartaoCreditoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero')
            ->add('codigoSeguranca')
            ->add('mesVencimento')
            ->add('anoVencimento')
            ->add('nomeImpressoCartao')
            ->add('cpfTitular')
            ->add('dataNascimento', BirthdayType::class, [
                'format' => 'dd MM yyyy',
                'placeholder' => [
                    'year' => 'Ano', 'month' => 'Mês', 'day' => 'Dia',
                ]
            ])
            ->add('parcelas', ChoiceType::class, [
                'choices'  => [
                    '1x' => 1,
                    '2x' => 2,
                    '3x' => 3,
                    '4x' => 4,
                    '5x' => 5,
                    '6x' => 6,
                    // '7x' => 7,
                    // '8x' => 8,
                    // '9x' => 9,
                    // '10x' => 10,
                    // '11x' => 11,
                    // '12x' => 12,
                ],
            ])
            ->add('token', HiddenType::class)
            ->add('bandeira', HiddenType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DadosCartaoCreditoDto::class,
            'attr' => [
                'class' => 'form-pagseguro'
            ]
        ]);
    }

}