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
class PosteForm extends AbstractType{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder
               
                ->add('id',null,array('attr'=>array ('style'=> 'display:none')))
                ->add('Titre')
                 ->add('Contenu','textarea',array('attr' =>array('class'=>'ckeditor')))
                ->add('date_published',null,array('attr'=>array ('style'=> 'display:none')))
                 ->add('image', new ImageForm())
                 ->add('Envoyer','submit')
            ;
           
                
        
    }
    
    
    
    
    public function getName() {
        return 'gestion';
    }

//put your code here
}
