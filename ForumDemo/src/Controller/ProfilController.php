<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormTypeInterface;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Session\Session; 
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage; 
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;

class ProfilController extends AbstractController
{


    /**
    * @Route("/profil/{id}", name="profil_show")
    */
    public function showprofil(UserRepository $user_repo, ObjectManager $manager)
    {

     
     $session = new Session(new NativeSessionStorage(), new AttributeBag());
     if ($session->get('connected') == 'true') {
          
     $_POST['username'] = $session->get('pseudo');

     $username = $_POST['username'];

     $repoIduser = $this->getDoctrine()->getRepository(User::class);
     $idUser = $repoIduser->findOneByUsername($username);
     $user = $user_repo->find($idUser);
     $message=null;
     if(isset($_POST['annuler']))
         {
              return $this->render('profil/profil.html.twig', [
                  'user' => $user,
                  'message' => $message,
                  'id' => $idUser


            ]);
         }

         if( isset($_POST['modifi']))
         {
              $user = $user_repo->findOneById(1);
              $user->setUsername($_POST['username'])
                   ->setLastname($_POST['lastname'])
                   ->setFirstname($_POST['firstname'])
                   ->setAddress($_POST['address'])
                   ->setZipcode($_POST['zipcode'])
                   ->setPhone($_POST['phone'])
                   ->setPassword(sha1($_POST['password']));

              $manager->persist($user);
              $manager->flush();
              $message = 'La modification a été bien enregistrée !';



              return $this->render('profil/profil.html.twig', [
                  'user' => $user,
                  'message' => $message,
                  'id' => $idUser


            ]);}
      
         
         else {
              // code...
              return $this->render('profil/profil.html.twig', [
                   'user' => $user,
                   'message' => $message,
                   'id' => $idUser

              ]);
         }
     }
                 else {
                      $user = null;
               return $this->redirectToRoute('connexion');
              }
    }



    // /**
    // * @Route("/profil/{id}/edit", name="profil_edit")
    // */
    // public function editprofil(User $user = null, Request $request, ObjectManager $manager)
    // {
    //    $form = $this->createFormBuilder($user)
    //              ->add('avatar')
    //              ->add('username')
    //              ->add('lastname')
    //              ->add('firstname')
    //              ->add('address')
    //              ->add('zipcode')
    //              ->add('birthday')
    //              ->add('phone')
    //              ->add('sex')
    //              ->add('createdAt')
    //              ->getForm();
    //    $form->handleRequest($request);
    //
    //    return $this->render('profil/profiledit.html.twig', [
    //       'formuser' => $form->createView(),
    //       'user' => $user
    //
    //   ]);
    // }
}
