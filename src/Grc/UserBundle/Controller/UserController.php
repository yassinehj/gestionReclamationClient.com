<?php

namespace Grc\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\User as BaseUser;
use Grc\UserBundle\Entity\User;
use Grc\UserBundle\Form\UserType;

/**
 * User controller.
 *
 */
class UserController extends Controller
{

    public function indexAction() {
//        $r= User::ROLE_DEFAULT; 
   //   $em = $this->container->get('doctrine')->getEntityManager()->createQuery(
     //           'SELECT u FROM GrcUserBundle:User u WHERE u.roles LIKE ROLE_MANAGER'
       //     );
        $query = $this->getDoctrine()->getEntityManager()
    ->createQuery('SELECT u FROM GrcUserBundle:User u WHERE u.roles LIKE :role'
    )->setParameter('role', '%"ROLE_MANAGER"%' );
    $users = $query->getResult();
      
        return $this->render('GrcUserBundle:Default:index.html.twig', array(
                    'comptes'=>$users
        ));
    }
    
     public function indexmanagerAction() {
//        $r= User::ROLE_DEFAULT; 
   //   $em = $this->container->get('doctrine')->getEntityManager()->createQuery(
     //           'SELECT u FROM GrcUserBundle:User u WHERE u.roles LIKE ROLE_MANAGER'
       //     );
        $query = $this->getDoctrine()->getEntityManager()
    ->createQuery('SELECT u FROM GrcUserBundle:User u WHERE u.roles LIKE :role'
    )->setParameter('role', '%"ROLE_CLIENT"%' );
    $users = $query->getResult();
      
        return $this->render('GrcUserBundle:Manager:indexmanager.html.twig', array(
                    'comptes'=>$users
        ));
    }
    
    public function AjoutAction()
    {
        $user = new User();
        $form = $this->container->get('form.factory')->create(new UserType(), $user);
        
        $Request = $this->getRequest();
        if($Request->getMethod()=="POST")
        {
                $form->bind($Request);
                if($form->isValid())
                {
                $em=$this->container->get('doctrine')->getEntityManager();
                $em->persist($user);
                $em->flush();
                return $this->redirect($this->generateUrl("grc_compte_list"));
                }
        }
           return $this->render('GrcUserBundle:Default:ajout.html.twig', array('form'=>$form->createView()));
    }
    
     public function updateAction($id)
    {
        $em=$this->container->get('doctrine')->getEntityManager();
        $user = $em->getRepository('GrcUserBundle:User')->find($id);
        $form = $this->container->get('form.factory')->create(new UserType(), $user);
        
        $Request = $this->getRequest();
        if($Request->getMethod()=="POST")
        {
                $form->bind($Request);
                if($form->isValid())
                {
                
                $em->persist($user);
                $em->flush();
                return $this->redirect($this->generateUrl("grc_user_list"));
                }
        } return $this->render('GrcUserBundle:Default:update.html.twig', array('form'=>$form->createView() ));
    }
    
     public function deleteAction($id)
    {
        $em=$this->container->get('doctrine')->getEntityManager();
        $User = $em->getRepository('GrcUserBundle:User')->find($id);
        $em->remove($User);
        $em->flush();
        
        return $this->redirect($this->generateUrl("grc_user_list"));

    } 
    
    
}
