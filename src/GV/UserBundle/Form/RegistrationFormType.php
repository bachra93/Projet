<?php

namespace GV\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;

use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder->add('nom')
                ->add('prenom')
        ->add('roles', 'collection', array(
                    'type' => 'choice',
                    'label' => 'Rôles',
                    'options' => array(
                        'label' => false,
                        'choices' => array('ROLE_Abonne' => 'Abonne', 'ROLE_Admin' => 'Admin'),
                        'multiple' => false,
                        'data' => 1
                    ))  
                    
                );
    }

    public function getName() {
        return 'user_registration';
    }

}
