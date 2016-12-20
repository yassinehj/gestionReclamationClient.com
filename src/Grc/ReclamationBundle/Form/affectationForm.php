<?php

namespace Grc\ReclamationBundle\Form;
Use Symfony\Component\Form\AbstractType;
Use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class affectationForm extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        
        $builder->add('sujet');
        
        $builder->add('titre', 'choice', array(
    'choices'   => array('Affectée' => 'Affectée'),
    'required'  => true,
));
        $builder->add('utilisateur');
        $builder->add('reclamation','textarea');
        
       
    }

   

    public function getName() {
        
        return 'reclamation' ;
        
    }

}