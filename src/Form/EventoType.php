<?php

namespace App\Form;

use App\Entity\Evento;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class EventoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('slug')
            ->add('imagem', FileType::class, [
                'label' => 'Capa',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2048k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png'
                        ],
                        'mimeTypesMessage' => 'Por favor, envie uma imagem válida'
                    ])
                ]
            ])
            ->add('data', DateType::class, [
                //'widget' => 'single_text',
                'format' => 'dd MM yyyy',
                'placeholder' => [
                    'year' => 'Ano', 'month' => 'Mês', 'day' => 'Dia',
                ]
            ])
            ->add('localPartida')
            ->add('localChegada')
            ->add('pais')
            ->add('descricaoLonga')
            ->add('descricaoCurta')
            ->add('valor')
            ->add('vagas')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Evento::class,
        ]);
    }
}
