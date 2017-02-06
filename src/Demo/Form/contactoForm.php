<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Demo\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Description of contactoForm
 *
 * @author leonardo
 */
class contactoForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre', 'text', array(
                                            'required'    => true,
                                            'constraints' => array(
                                                new Assert\NotBlank()
                                            )
                ))
                ->add('correo', 'text', array(
                                            'required'    => true,
                                            'constraints' => array(
                                                new Assert\NotBlank(),
                                                new Assert\Email()
                                            )
                ))
                ->add('comentario', 'textarea', array(
                                            'required'    => true,
                                            'constraints' => array(
                                                new Assert\NotBlank()
                                            )
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'cascade_validation' => true
        ));
    }

    public function getName()
    {
        return 'contacto_form';
    }

}
