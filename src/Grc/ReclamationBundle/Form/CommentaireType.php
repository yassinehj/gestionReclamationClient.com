<?php

namespace Grc\ReclamationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommentaireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('user')
            ->add('commentaire','textarea')
          //  ->add('submit', 'submit', array('label' => 'Créer'))
           
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Grc\ReclamationBundle\Entity\Commentaire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'CommentaireaireType';
    }
}
