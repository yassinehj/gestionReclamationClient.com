<?php

namespace Grc\ReclamationBundle\Form;
Use Symfony\Component\Form\AbstractType;
Use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ajoutSujetForm extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        
        $builder->add('sujet');
        
        $builder->add('etat', 'choice', array(
    'choices'   => array('reçu' => 'Reçu'),
    'required'  => true,
));
        $builder->add('utilisateur');
        $builder->add('reclamation','textarea');
        
       
    }

   

    public function getName() {
        
        return 'reclamation' ;
        
    }

}