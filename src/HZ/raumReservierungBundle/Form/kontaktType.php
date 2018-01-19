<?php

namespace HZ\raumReservierungBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class kontaktType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array('label' => 'Family name:'))
        ->add('email', TextType::class, array('label' => 'Email address:'))
        ->add('phone', TextType::class, array('label' => 'Phone number:'))
        ->add('subject', TextType::class, array('label' => 'Suject About:'))
        ->add('content', TextareaType::class, array('label' => 'Your Message there:'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HZ\raumReservierungBundle\Entity\kontakt'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'h_zraum_reservierung_kontakt';
    }


}
