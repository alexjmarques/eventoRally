<?php

namespace App\Form;

use App\Entity\Cliente;
use App\Enum\EstadoEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ClienteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class, array('label' => "Nome"))
            ->add('sobrenome', TextType::class, array('label' => "Sobrenome"))
            ->add('apelido')
            ->add('email', TextType::class, array('label' => "E-mail"))
            ->add('password', TextType::class, array('label' => "Senha"))
            
            ->add('dataNascimento', BirthdayType::class, [
                //'widget' => 'single_text',
                'format' => 'dd MM yyyy',
                'placeholder' => [
                    'year' => 'Ano', 'month' => 'Mês', 'day' => 'Dia',
                ]
            ])
            ->add('rg', TextType::class, array('label' => "RG"))
            ->add('cpf', TextType::class, array('label' => "CPF"))
            ->add('cnh', TextType::class, array('label' => "CNH"))
            ->add('sexo', ChoiceType::class, [
                'choices'  => [
                    'Masculino' => true,
                    'Feminino' => true,
                ],
            ])

            ->add('telefoneResidencial', TextType::class, array('label' => "Tel Residencial"))
            ->add('telefoneCelular', TextType::class, array('label' => "Celular"))
            ->add('endereco', TextType::class, array('label' => "Celular"))
            ->add('numero')
            ->add('complemento', TextType::class, array('label' => "complemento (Caso não possua, preencha \"S/C\")"))
            ->add('bairro')
            ->add('cep')
            ->add('estado', ChoiceType::class, [
                'choices'  => (new EstadoEnum())->getConstList(),
            ])
            ->add('cidade')
            ->add('dadosProfissionais', DadosProfissionaisType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cliente::class,
        ]);
    }
}