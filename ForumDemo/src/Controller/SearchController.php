<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ArticleRepository;
use App\Entity\Section;
use App\Entity\Article;
Use App\Entity\User;
Use App\Repository\UserRepository;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function search()
    {
        return $this->render('search/searchresult.html.twig', [
            'controller_name' => 'SearchController',
        ]);
    }

    /**
     * @Route("/searchResult", name="recup")
     */

         public function searchAction(Request $request, ArticleRepository $repo, UserRepository $user_repo)
         {
               $user = $user_repo->find(1);
               $articles=null;
              if ($request->getMethod() == "POST") {
                  $search = $request->request->get('recherche');

                  $datas = explode(" ", $search);

                  $em = $this->getDoctrine()->getManager();
                  $query = $this->getDoctrine()->getRepository(Article::class)->createQueryBuilder('a');


                  $i = 0;
                  foreach ($datas as $data) {
                      $query
                          ->andWhere('a.name LIKE :data'.$i.' OR a.content LIKE :data'.$i)
                          ->setParameter('data'.$i, '%'.$data.'%');
                     $i++;
                  }

               $articles = $query->getQuery()->getResult();
               
             }
                  return $this->render('search/searchresult.html.twig',
                       [
                            'articles' => $articles,
                            'user' => $user
                       ]);
         }
}
