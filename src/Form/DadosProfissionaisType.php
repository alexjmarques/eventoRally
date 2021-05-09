<?php

namespace App\Form;

use App\Entity\DadosProfissionais;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class DadosProfissionaisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('empresa')
            ->add('ramoDeAtividade')
            ->add('funcao', TextType::class, array('label' => "Cargo"))
            ->add('email', TextType::class, array('label' => "Email Comercial"))
            ->add('telefone', TextType::class, array('label' => "Telefone Comercial"))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DadosProfissionais::class,
        ]);
    }
}
