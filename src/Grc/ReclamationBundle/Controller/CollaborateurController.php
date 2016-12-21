<?php
namespace Grc\ReclamationBundle\Controller;

use Grc\ReclamationBundle\Entity\Reclamation;
use Grc\ReclamationBundle\Entity\Commentaire;
use Grc\ReclamationBundle\Form\ajoutSujetForm;
use Grc\ReclamationBundle\Form\CommentaireType;
use Grc\ReclamationBundle\Form\affectationForm;
use Grc\ReclamationBundle\Form\ejecterForm;
use Grc\ReclamationBundle\Form\terminerForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class CollaborateurController extends Controller {
    
    
     public function listAction()
    {
        
       
           $query = $this->getDoctrine()->getEntityManager()
    ->createQuery('SELECT u FROM GrcReclamationBundle:Reclamation u WHERE u.etat LIKE :etat'
    )->setParameter('etat', 'Affectée' );
    $reclamation = $query->getResult();
      
        return $this->render('GrcReclamationBundle:Collaborateur:listeSujet.html.twig', array(
                    'reclamation'=>$reclamation
        ));
     
    }
         public function listecourAction()
    {
        
       
           $query = $this->getDoctrine()->getEntityManager()
    ->createQuery('SELECT u FROM GrcReclamationBundle:Reclamation u WHERE u.etat LIKE :etat'
    )->setParameter('etat', 'en cours' );
    $reclamation = $query->getResult();
      
        return $this->render('GrcReclamationBundle:Collaborateur:listeSujetcour.html.twig', array(
                    'reclamation'=>$reclamation
        ));
     
    }
    
    
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GrcReclamationBundle:Reclamation')->find($id);
        $entities = $em->getRepository('GrcReclamationBundle:Commentaire')->findByReclamation($id);
        $entityCommentaire = new Commentaire();
        $form = $this->createForm(new CommentaireType(),$entityCommentaire);
        return $this->render('GrcReclamationBundle:Collaborateur:showSujet.html.twig', array(
            'entity'      => $entity,
            'entities' => $entities,
            'form' => $form->createView(),
            
        ));
        
    }
      public function showcourAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GrcReclamationBundle:Reclamation')->find($id);
        $entities = $em->getRepository('GrcReclamationBundle:Commentaire')->findByReclamation($id);
        $entityCommentaire = new Commentaire();
        $form = $this->createForm(new CommentaireType(),$entityCommentaire);
        return $this->render('GrcReclamationBundle:Collaborateur:showSujetcour.html.twig', array(
            'entity'      => $entity,
            'entities' => $entities,
            'form' => $form->createView(),
            
        ));
        
    }
     public function updateAction($id)
    {
        $em=$this->container->get('doctrine')->getEntityManager();
        $reclamation = $em->getRepository('GrcReclamationBundle:Reclamation')->find($id);
        $form = $this->container->get('form.factory')->create(new ejecterForm(), $reclamation);
        
        $Request = $this->getRequest();
        if($Request->getMethod()=="POST")
        {
                $form->bind($Request);
                if($form->isValid())
                {
                
                $em->persist($reclamation);
                $em->flush();
                return $this->redirect($this->generateUrl("grc_collaborateur_liste"));
                }
        } return $this->render('GrcReclamationBundle:Collaborateur:update.html.twig', array('form'=>$form->createView() ));
    }
    
     public function updateterminerAction($id)
    {
        $em=$this->container->get('doctrine')->getEntityManager();
        $reclamation = $em->getRepository('GrcReclamationBundle:Reclamation')->find($id);
        $form = $this->container->get('form.factory')->create(new terminerForm(), $reclamation);
        
        $Request = $this->getRequest();
        if($Request->getMethod()=="POST")
        {
                $form->bind($Request);
                if($form->isValid())
                {
                
                $em->persist($reclamation);
                $em->flush();
                return $this->redirect($this->generateUrl("grc_collaborateur_liste"));
                }
        } return $this->render('GrcReclamationBundle:Collaborateur:updateterminer.html.twig', array('form'=>$form->createView() ));
    }
}
