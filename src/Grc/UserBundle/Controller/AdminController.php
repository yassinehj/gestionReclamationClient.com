<?php

namespace Grc\UserBundle\Controller;

use Grc\UserBundle\Entity\Service;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\UserBundle\Entity\User as BaseUser;
use Grc\UserBundle\Entity\User;
use Grc\UserBundle\Form\ManagerType;

/**
 * User controller.
 *
 */
class AdminController extends Controller
{

    public function ListManagerAction() {
//        $r= User::ROLE_DEFAULT; 
   //   $em = $this->container->get('doctrine')->getEntityManager()->createQuery(
     //           'SELECT u FROM GrcUserBundle:User u WHERE u.roles LIKE ROLE_MANAGER'
       //     );
        $query = $this->getDoctrine()->getEntityManager()
    ->createQuery('SELECT u FROM GrcUserBundle:User u WHERE u.roles LIKE :role'
    )->setParameter('role', '%"ROLE_MANAGER"%' );
    $users = $query->getResult();
      
        return $this->render('GrcUserBundle:Admin:ListManager.html.twig', array(
                    'comptes'=>$users
        ));
    }
    

    public function AjoutManagerAction()
    {
        //$service= new Service();
        $user = new User();
        //$em1 = $this->getDoctrine()->getManager();
       // $serv=$em1->getRepository('GrcUserBundle:Service')->findAll();
        $form = $this->container->get('form.factory')->create(new ManagerType(), $user);

        $Request = $this->getRequest();
        if($Request->getMethod()=="POST")
        {
                $form->bind($Request);
                if($form->isValid())
                {
                $em=$this->container->get('doctrine')->getEntityManager();
                $em->persist($user);
                $em->flush();
                return $this->redirect($this->generateUrl("grc_admin_manager_list"));
                }
        }
           return $this->render('GrcUserBundle:Admin:AjoutManager.html.twig', array('form'=>$form->createView()));
    }

    
     public function updateManagerAction($id)
    {
        $em=$this->container->get('doctrine')->getEntityManager();
        $user = $em->getRepository('GrcUserBundle:User')->find($id);
        $form = $this->container->get('form.factory')->create(new ManagerType(), $user);
        $Request = $this->getRequest();
        if($Request->getMethod()=="POST")
        {
                $form->bind($Request);
                if($form->isValid())
                {
                $em->persist($user);
                $em->flush();
                return $this->redirect($this->generateUrl("grc_admin_manager_list"));
                }
        } return $this->render('GrcUserBundle:Admin:UpdateManager.html.twig', array('form'=>$form->createView() ));
    }

     public function deleteManagerAction($id)
    {
        $em=$this->container->get('doctrine')->getEntityManager();
        $User = $em->getRepository('GrcUserBundle:User')->find($id);
        $em->remove($User);
        $em->flush();
        
        return $this->redirect($this->generateUrl("grc_admin_manager_list"));
    }
}
