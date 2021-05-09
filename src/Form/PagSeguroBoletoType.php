<?php

namespace App\Form;

use App\Payment\PagSeguro\Dto\DadosPagamentoDto;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class PagSeguroBoletoType
 * @package App\Form
 */
class PagSeguroBoletoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('session', HiddenType::class, [
                'attr' => [
                    'class' => 'session'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DadosPagamentoDto::class,
            'attr' => [
                'class' => 'form-pagseguro'
            ]
        ]);
    }
}