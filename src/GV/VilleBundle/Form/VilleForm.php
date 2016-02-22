<?php

namespace GV\VilleBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class VilleForm  extends AbstractType {
    
      public function getName() {
         return 'Ville';
        
    }
  
    public function buildForm(FormBuilderInterface $builder, array $options) //argument:constructeur et tab d options
    {
      $builder
             
                
              ->add('nom')  
              ->add('pays', 'choice', array('choices' => array("france" => "france", "tunisie" => "tunisie", "canada" => "canada","italy" => "italy","maldives" => "maldives","algerie" => "algerie","egypte" => "egypte","dubai" => "dubai","espagne" => "espagne","turquie" => "turquie","portugal" => "portugal"), 
                                            'multiple' => false, 
                                            'expanded' => false, 
                                          'preferred_choices' => array(1),
                                            
                                           'empty_data'  => -1
                                            ))
              ->add('latitude')
              ->add('longitude')
              ->add('description', 'textarea')
              ->add('type')
              ->add('langue')
              ->add('image')
             ;
              
    }

  

}
