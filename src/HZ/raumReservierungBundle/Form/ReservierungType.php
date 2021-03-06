<?php

namespace HZ\raumReservierungBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ReservierungType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('start')
        ->add('end')
        ->add('title')
        ->add('url')
        ->add('className', ChoiceType::class, array(
    'choices'  => array(
        'Diponible' => 'Disponible',
        'NoDisponible' => 'NoDisponible',
    )))

                    ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HZ\raumReservierungBundle\Entity\Reservierung'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'hz_raumreservierungbundle_reservierung';
    }


}
