<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GestionForm
 *
 * @author user
 */

namespace GV\ForumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CommentaireForm extends AbstractType {

    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder
                ->add('id',null,array('attr'=>array ('style'=> 'display:none')))
                ->add('Poste', 'entity', array(
                    'class' => 'GVForumBundle:Poste',
                    'property' => 'id','attr'  =>  array('style'=>'display:none;')))
                ->add('Body', 'textarea', array('attr' => array('class' => 'ckeditor')))
                ->add('date_p',null,array('attr'=>array ('style'=> 'display:none')))
;
        
    }

    public function getName() {
        return 'gestion';
    }

//put your code here
}
