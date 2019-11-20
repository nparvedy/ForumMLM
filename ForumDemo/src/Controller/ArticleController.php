<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Entity\User;
Use App\Entity\Subsection;
Use App\Entity\Comment;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use App\Repository\CommentRepository;
use App\Repository\SubsectionRepository;
Use App\Repository\UserRepository;
use App\Form\CommentType;
use Symfony\Component\HttpFoundation\Session\Session; 
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage; 
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;

class ArticleController extends AbstractController
{
    /**
     * @route("/subsection/{id_subsection}", name="test")
     */

    public function article($id_subsection, Request $request, PaginatorInterface $paginator, SubsectionRepository $repo, ArticleRepository $repo_article){

     

        $subsection = $repo->find($id_subsection);

        $articles = $repo_article->findBy(['subsection' => $id_subsection],['createdAt' => 'desc']);

        $articles = $paginator->paginate(
            $articles,
            $request->query->getInt('page', 1),
            6
        );

        return $this->render('article/articles.html.twig',[
            'articles' => $articles,
            'id_subsection' => $id_subsection
        ]);
    }

    /**
     * @route("subsection/{id_subsection}/article/new", name="forum_create")
     * @route("subsection/{id_subsection}/article/{id}/edit", name="forum_edit")
     */

    public function form($id_subsection, Article $article = null, Request $request, ObjectManager $manager, SubsectionRepository $repo_sub, UserRepository $user_repo){

        $session = new Session(new NativeSessionStorage(), new AttributeBag());

        $subsection = $repo_sub->find($id_subsection);
        $_POST['username'] = $session->get('pseudo');
        $username = $_POST['username'];
        $repoIduser = $this->getDoctrine()->getRepository(User::class);
        $idUser = $repoIduser->findOneByUsername($username);
        $user = $user_repo->find($idUser);

        if(!$article){ 
            $article = new Article();
        }

        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            if(!$article->getId()){
                $article->setCreatedAt(new \DateTime());
                $article->setUser($user);
                $article->setSubsection($subsection);
            }

            $manager->persist($article);
            $manager->flush();

            return $this->redirectToRoute('article_show', ['id_subsection' => $subsection->getId(), 'id_article' => $article->getId()]);
        }

        return $this->render('article/create.html.twig', [
            'formArticle' => $form->createView(),
            'editMode' => $article->getId() !== null,
            'article' => $article,
            'user' => $user
        ]);
    }

    /**
     * @route("subsection/{id_subsection}/article/{id_article}/comment/new", name="comment_create")
     * @route("subsection/{id_subsection}/article/{id_article}/comment/{id}/edit", name="comment_edit")
     */
    public function comment($id_article, ArticleRepository $repo_article, Comment $comment = null, Request $request, ObjectManager $manager, SubsectionRepository $repo_sub, $id_subsection,UserRepository $user_repo){
        $session = new Session(new NativeSessionStorage(), new AttributeBag());

        $subsection = $repo_sub->find($id_subsection);

        $repo_user = $this->getDoctrine()->getRepository(User::class);
        $_POST['username'] = $session->get('pseudo');
        $username = $_POST['username'];
        $repoIduser = $this->getDoctrine()->getRepository(User::class);
        $idUser = $repoIduser->findOneByUsername($username);
        $user = $user_repo->find($idUser);
        $article = $repo_article->find($id_article);

    if(!$comment){ 
        $comment = new Comment();
    }

    $form = $this->createForm(CommentType::class, $comment);

    $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            if(!$comment->getId()){
                $comment->setCreatedAt(new \DateTime());
                $comment->setUser($user);
                $comment->setArticle($article);
            }

            $manager->persist($comment);
            $manager->flush();

            return $this->redirectToRoute('article_show', ['id_subsection' => $subsection->getId(),'id_article' => $article->getId()]);
        }

        

        return $this->render('article/create_comment.html.twig', [
            'formComment' => $form->createView(),
            'editMode' => $comment->getId() !== null,
            'id_subsection' => $id_subsection
            
        ]);
    }

    /**
     * @route("/subsection/{id_subsection}/article/{id_article}", name="article_show")
     */
    public function show($id_subsection, $id_article, ArticleRepository $repo, PaginatorInterface $paginator, Request $request, CommentRepository $repo_comment, SubsectionRepository $repo_sub, UserRepository $user_repo = NULL){
        $session = new Session(new NativeSessionStorage(), new AttributeBag());

        if ($user_repo != null) {
        $_POST['username'] = $session->get('pseudo');
        $username = $_POST['username'];
        $repoIduser = $this->getDoctrine()->getRepository(User::class);
        $idUser = $repoIduser->findOneByUsername($username);
        $user = $user_repo->find($idUser);

        $subsection = $repo_sub->find($id_subsection);

        $article = $repo->find($id_article);

        // pagination 

        $comments = $repo_comment->findBy(['article' => $id_article],['createdAt' => 'asc']);
        //
        $comments = $paginator->paginate(
            $comments,
            $request->query->getInt('page', 1),
            3
        );
        
        return $this->render('article/show.html.twig', [
            'article' => $article,
            'comments' => $comments,
            'id_subsection' => $id_subsection,
            'user' => $user
        ]);
        }
    }


    

    
    
}
