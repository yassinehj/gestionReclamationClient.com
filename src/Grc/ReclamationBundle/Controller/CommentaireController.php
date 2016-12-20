<?php

namespace Grc\ReclamationBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Grc\ReclamationBundle\Entity\Commentaire;
use Grc\ReclamationBundle\Form\CommentaireType;

class CommentaireController extends Controller
{

    /**
     * Lists all Commentaire entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GrcReclamationBundle:Commentaire')->findAll();

        return $this->render('GrcReclamationBundle:Reclamation:listecomm.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Commentaire entity.
     *
     */
    public function createAction(Request $request,$id)
    {
        $entity = new Commentaire();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setReclamation($em->getRepository('GrcReclamationBundle:Reclamation')->find($id)) ;
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('reclamation_showSujet', array('id' => $id)));
        }

        return $this->render('GrcReclamationBundle:Commentaire:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }


    /**
     * Creates a form to create a Commentaire entity.
     *
     * @param Commentaire $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Commentaire $entity)
    {
        $form = $this->createForm(new CommentaireType(), $entity);

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Commentaire entity.
     *
     */
    public function newAction()
    {
        $entity = new Commentaire();
        $form   = $this->createCreateForm($entity);

        return $this->render('GrcReclamationBundle:Commentaire:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Commentaire entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GrcReclamationBundle:Commentaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentaire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GrcReclamationBundle:Commentaire:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Commentaire entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GrcReclamationBundle:Commentaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentaire entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GrcReclamationBundle:Commentaire:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Commentaire entity.
    *
    * @param Commentaire $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Commentaire $entity)
    {
        $form = $this->createForm(new CommentaireType(), $entity, array(
            'action' => $this->generateUrl('commentaire_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

       // $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing Commentaire entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GrcReclamationBundle:Commentaire')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Commentaire entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('commentaire_edit', array('id' => $id)));
           return $this->reclamation_redirectionirect($this->generateUrl('commentaire_edit', array('id' => $id)));
        }

        return $this->render('GrcReclamationBundle:Commentaire:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Commentaire entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GrcReclamationBundle:Commentaire')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Commentaire entity.');
            }

            $em->remove($entity);
            $em->flush();
        }
        
       return $this->redirect("http://localhost/Grc/web/app_dev.php/reclamation/listeSujet");
    }

    /**
     * Creates a form to delete a Commentaire entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commentaire_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
    
    public function suppressionAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $commentaire = $em->getRepository('GrcReclamationBundle:Commentaire')->find($id);
        $em->remove($commentaire);
        $em->flush();
        return $this->redirect($this->generateUrl('commentaire'));
    
    }
    
     
      public function ajouterAction() {
        $Request =$this->getRequest();
        if($Request->getMethod()=="POST"){
            //instanciaion des comms
            $Comm= new Commentaire();
            //Recuperation des données
            $user=$Request->get('user');
            $commentaire=$Request->get('commentaire');
                $reclamation=$Request->get('reclamation');
                   $created=$Request->get('created');
            $Comm->setUser($user);
            $Comm->setCommentaire($commentaire);
              $Comm->setReclation($reclamation);
               $Comm->setCreated($created);
            //instanciation de l $em
            $em=$this->getDoctrine()->getManager();
            $em->persist($Comm);
            $em->flush();
        }        
        return $this->render('GrcCommentaireBundle:Commentaire:add_comment.html.twig', array());
    }
    
    
     public function ajoutAction()
    {
        
         $commentaire = new Commentaire();
        $form = $this->container->get('form.factory')->create(new CommentaireType(), $commentaire);
        
        $Request = $this->getRequest();
        if($Request->getMethod()== "POST")
        {
            $form->bind($Request);
            if($form->isValid())
            {
              $em = $this->container->get('doctrine')->getEntityManager();
              $em->persist($commentaire);
              $em->flush();
              return $this->redirect($this->generateUrl("reclamation_showSujet"));
            }
        }
        
        return $this->render('GrcReclamationBundle:Commentaire:add_comment.html.twig',  array('Form'=>$form->createView()));
        
        
        
    }
    
    
}
