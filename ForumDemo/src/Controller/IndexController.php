<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Tchat;
use App\Entity\Reset;
use Symfony\Component\HttpFoundation\Request; 
use App\Repository\UserRepository; 
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Section;
use App\Entity\Article;
use App\Entity\Subsection;
use App\Repository\SubsectionRepository;
use Symfony\Component\HttpFoundation\Session\Session; 
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage; 
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(SubsectionRepository $subsection_repo,UserRepository $user_repo)
    {

        $session = new Session(new NativeSessionStorage(), new AttributeBag());

        if ($session->get('connected') == 'true') {

            $_POST['username'] = $session->get('pseudo');

            $username = $_POST['username'];

            $repoIduser = $this->getDoctrine()->getRepository(User::class);
            $idUser = $repoIduser->findOneByUsername($username);

            $user = $user_repo->find(1);
            $subsection = $subsection_repo->find(1);

            $repoTchat = $this->getDoctrine()->getRepository(Tchat::class);
            $tchat = $repoTchat->findAll();
           
    
            $repo = $this->getDoctrine()->getRepository(Section::class);
            $section = $repo->findAll();

            $repod = $this->getDoctrine()->getRepository(Article::class);
            $article = $repod-> articleLimit();

        

            return $this->render('ml/index.html.twig', [
            'sections' => $section,
            'articles' => $article,
            'tchat' => $tchat,
            'subsection' => $subsection,
            'user' => $user,
            'username' => $username,
            'idUser' => $idUser
            ]);
        }else {
            return $this->redirectToRoute('connexion');
        }
    }
    
    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion(Request $request, ObjectManager $manager) {
        $confirm ="";
        $error ="";
        $session = new Session(new NativeSessionStorage(), new AttributeBag());
            // VERIFICATION INSCRIPTION
            if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname'])) {
               if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['firstname'])) {
                   $error = "Veuillez remplir tout les champs.";
               }else {
                // MOT DE PASSE CRYPTER
                $password = sha1($_POST['password']);
                
                $register= new User(); 
                $register->setUsername($request->request->get('username'))
                ->setPassword($password)
                ->setFirstname($request->request->get('firstname'))
                ->setLastname($request->request->get('lastname'))
                ->setSex($request->request->get('sex'))
                ->setEmail($request->request->get('email'))
                ->setAddress($request->request->get('address'))
                ->setZipcode($request->request->get('zipcode'))
                ->setBirthday($request->request->get('birthday'))
                ->setCandidat($request->request->get('candidat'))
                ->setAvatar($_FILES['avatar']['name'])
                ->setPhone($request->request->get('phone'))
                ->setAdmin(0)
                ->setcreatedAt(new \DateTime('now'));
                $manager->persist($register); 
                $manager->flush();
                $confirm =  "Votre inscription à bien réussis monsieur " .$_POST['username']; 
               }
                // VERIFICATION CONNEXION
            }
            else if (isset($_POST['usernameco']) && isset($_POST['passwordco']))
                    {
                if (empty($_POST['usernameco']) || empty($_POST['passwordco'])) 
                    {
                        $error = "Remplir les champs.";
                    }
                    else 
                    {
                        $repo = $this->getDoctrine()->getRepository(User::class);
                        $users = $repo->findOneByUsername($_POST['usernameco']);
                        if ($users->getPassword() == sha1($_POST['passwordco'])) {
                            $confirm ="ok";
                            $session->set('connected', 'true');
                            $session->set('pseudo', $_POST['usernameco']);
                            return $this->redirectToRoute('index');
                        }
                    else 
                    {
                        $error = "Le mot de passe n'est pas bon";
                    }
                    }
                }
            

            return $this->render('ml/test.html.twig', [
                'confirm'=>$confirm,
            'error'=>$error]); 
    
    }
    // REINITIALISATION MOT DE PASSE PAR MAIL
     /**
     * @Route("/reset", name="reset")
     */
     public function reset(Request $request, ObjectManager $manager)
     {
         $confirm ="";
 
         if (!empty($_POST['email'])) {
            $repo = $this->getDoctrine()->getRepository(User::class);
            $tcheckmail = $repo->findOneByEmail($_POST['email']);

             if ($tcheckmail) {

                $confirm = "Un email a été envoyer à votre adresse mail";
                $code= new Reset(); 
                $code->setCode(mt_rand(1, 80000));
                $code->setEmail($_POST['email']);
                $manager->persist($code); 
                $manager->flush();

                //FONCTION MAIL A ENLEVER DES COMMENTAIRES EN PROD

                //     $to = $_POST['email'];
                //     $subject = "Reinitialiser mot de passe - mission local";
                    
                //     $message="<html><head></head><body><center>Vous avez choisis de réinitialiser votre mot de passe.<br><br>Si vous n'avez pas demander de réinitialisaton veuillez ignorez ce message.<br><br>
                //     <a href='http://missionlocal.fr'><button style='
                //     padding: 10px;
                //     border-radius: 3px;
                //     border: 1px solid #bf6f33;
                //     box-shadow: 0px 2px 0px #6d2704;
                //     background-color: #e0530b;
                //     color: white;
                // '>Cliquer ici pour changer de mot de passe</button><br><br>
                //     Voici le code de récupération : 51562  </center></body></html>";
                    
                //     $headers  = 'MIME-Version: 1.0' . "\r\n";
                //     $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                    
                //     mail($to, $subject, $message, $headers);

             }else {

                 $confirm = "L'adresse email saisie n'existe pas.";
             }
         }
 
         return $this->render('ml/reset.html.twig', [
         'confirm' => $confirm,
         ]);
     }
     // CONFIRMATION RECEPTION DU CODE EMAIL
      /**
     * @Route("/confirm", name="confirm")
     */
    public function confirm(Request $request, ObjectManager $manager)
    {
        $confirm ="";

        if (!empty($_POST['email']) && !empty($_POST['code'])) {
            // TCHECK EMAIL AND CODE
                    $repocode = $this->getDoctrine()->getRepository(Reset::class);
                    $tcheckcode = $repocode->findOneByCode($_POST['code']);
                    $tcheckmail = $repocode->findOneByEmail($_POST['email']);

                    $repoUser = $this->getDoctrine()->getRepository(User::class);
                    $user = $repoUser ->findOneByEmail($_POST['email']);

            if ($tcheckmail && $tcheckcode) {
                if ($_POST['password'] === $_POST['repassword']) {

                    $password = sha1($_POST['password']);
                    $email = $_POST['email'];
                    $repoUser->updatePassword($password,$email);
                    $confirm =  "Votre mot de passe à bien été changer vous serez rediriger vers la page de connexion dans 10 secondes.";
                }

            }else {
                $confirm =  "L'email ou le code n'est pas bon.";
            }
        }

        return $this->render('ml/confirm.html.twig', [
        'confirm' => $confirm,
        ]);
    }

     /**
     * @Route("/logout", name="deconnection")
     */
    public function logout()
    {
        $session = new Session(new NativeSessionStorage(), new AttributeBag());
    
        if ($session->get('connected') == 'true') {
            $session->clear();
            echo "vous êtes bien deconnecter";
            return $this->redirectToRoute('connexion');
        }else {
            echo "Vous êtes déjà deconnecter.";
        }

        return $this->render('ml/logout.html.twig');

        
    }

    // $session = new Session(new NativeSessionStorage(), new AttributeBag());
    //     if ($session->get('connected') == 'true') {
    //         $username = $session ->get('pseudo');
    //         // USERNAME CONTIENT LE NOM DE LA PERSONNE POUR POUVOIR EFFECTUER LES RECHERCHES LIER A L'UTILISATEUR
    //         // LES DONNEES SONT A UTILISER ICI
    //     }else {
    //         return $this->redirectToRoute('connexion');
    //     }

}