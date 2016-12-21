<?php
namespace Grc\ReclamationBundle\Controller;

use Grc\ReclamationBundle\Entity\Reclamation;
use Grc\ReclamationBundle\Entity\Commentaire;
use Grc\ReclamationBundle\Form\ajoutSujetForm;
use Grc\ReclamationBundle\Form\CommentaireType;
use Grc\ReclamationBundle\Form\affectationForm;
use Grc\ReclamationBundle\Form\cloturerForm;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class ReclamationController extends Controller {


     public function listAction()
    {
           $query = $this->getDoctrine()->getEntityManager()
    ->createQuery('SELECT u FROM GrcReclamationBundle:Reclamation u WHERE u.etat LIKE :etat'
    )->setParameter('etat', 'reçu' );
    $reclamation = $query->getResult();
      
        return $this->render('GrcReclamationBundle:Reclamation:listeSujet.html.twig', array(
                    'reclamation'=>$reclamation
        ));
     
    }
      public function listejecterAction()
    {
           $query = $this->getDoctrine()->getEntityManager()
    ->createQuery('SELECT u FROM GrcReclamationBundle:Reclamation u WHERE u.etat LIKE :etat'
    )->setParameter('etat', 'ejectée' );
    $reclamation = $query->getResult();
      
        return $this->render('GrcReclamationBundle:Reclamation:listejecter.html.twig', array(
                    'reclamation'=>$reclamation
        ));
     
    }
    
     public function listterminerAction()
    {
        
       
           $query = $this->getDoctrine()->getEntityManager()
    ->createQuery('SELECT u FROM GrcReclamationBundle:Reclamation u WHERE u.etat LIKE :etat'
    )->setParameter('etat', 'terminée' );
    $reclamation = $query->getResult();
      
        return $this->render('GrcReclamationBundle:Reclamation:listterminer.html.twig', array(
                    'reclamation'=>$reclamation
        ));
     
    }
    
     public function ajoutAction()
    {
        $objUser = $this->get('security.context')->getToken()->getUser();
         $reclamation = new Reclamation();
        $form = $this->container->get('form.factory')->create(new ajoutSujetForm(), $reclamation);
        
        $Request = $this->getRequest();
        if($Request->getMethod()== "POST")
        {
            $form->bind($Request);
            if($form->isValid())
            {
              $em = $this->container->get('doctrine')->getEntityManager();
              $em->persist($reclamation);
              $em->flush();
              return $this->redirect($this->generateUrl("grc_reclamation_liste_client"));
            }
        }
        
        return $this->render('GrcReclamationBundle:Reclamation:ajoutSujet.html.twig',  array('Form'=>$form->createView(),'user'=>$objUser));
        
        
        
    }

    public function listreclamationclientAction() {

        $query = $this->getDoctrine()->getEntityManager()
            ->createQuery("SELECT R FROM GrcReclamationBundle:Reclamation R WHERE R.utilisateur='client'"
            );
        $reclamation = $query->getResult();

        return $this->render('GrcReclamationBundle:Reclamation:Listreclamationclient.html.twig', array(
            'rec'=>$reclamation
        ));
    }
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GrcReclamationBundle:Reclamation')->find($id);
        $entities = $em->getRepository('GrcReclamationBundle:Commentaire')->findByReclamation($id);
        $entityCommentaire = new Commentaire();
        $form = $this->createForm(new CommentaireType(),$entityCommentaire);
        return $this->render('GrcReclamationBundle:Reclamation:showSujet.html.twig', array(
            'entity'      => $entity,
            'entities' => $entities,
            'form' => $form->createView(),
            
        ));
        
    }
     public function showterminerAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GrcReclamationBundle:Reclamation')->find($id);
        $entities = $em->getRepository('GrcReclamationBundle:Commentaire')->findByReclamation($id);
        $entityCommentaire = new Commentaire();
        $form = $this->createForm(new CommentaireType(),$entityCommentaire);
        return $this->render('GrcReclamationBundle:Reclamation:showSujetterminer.html.twig', array(
            'entity'      => $entity,
            'entities' => $entities,
            'form' => $form->createView(),
            
        ));
        
    }
     public function updateAction($id)
    {
        $em=$this->container->get('doctrine')->getEntityManager();
        $reclamation = $em->getRepository('GrcReclamationBundle:Reclamation')->find($id);
        $form = $this->container->get('form.factory')->create(new affectationForm(), $reclamation);
        
        $Request = $this->getRequest();
        if($Request->getMethod()=="POST")
        {
                $form->bind($Request);
                if($form->isValid())
                {
                
                $em->persist($reclamation);
                $em->flush();
                return $this->redirect($this->generateUrl("grc_reclamation_liste"));
                }
        } return $this->render('GrcReclamationBundle:Reclamation:update.html.twig', array('form'=>$form->createView() ));
    }
     public function updatecloturerAction($id)
    {
        $em=$this->container->get('doctrine')->getEntityManager();
        $reclamation = $em->getRepository('GrcReclamationBundle:Reclamation')->find($id);
        $form = $this->container->get('form.factory')->create(new cloturerForm(), $reclamation);
        
        $Request = $this->getRequest();
        if($Request->getMethod()=="POST")
        {
                $form->bind($Request);
                if($form->isValid())
                {
                
                $em->persist($reclamation);
                $em->flush();
                return $this->redirect($this->generateUrl("grc_reclamation_liste"));
                }
        } return $this->render('GrcReclamationBundle:Reclamation:updatecloturer.html.twig', array('form'=>$form->createView() ));
    }
}
