<?php
namespace App\Controller;

use App\Data\SearchData;
use App\Form\SearchForm;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
//pour avoir tous les crampons
use App\Repository\CleatRepository;
//pour avoir tous les paniers
use App\Repository\PanierRepository;


class StaticPages extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(CleatRepository $cleatRepository, Request $request): Response
    {
        $data = new SearchData();
        $form = $this->createForm(SearchForm::class, $data);
        $form->handleRequest($request);
        $products = $cleatRepository->findSearch($data); //voir dans CleatRepository
        return $this->render('cleat/index.html.twig', [
            //'cleats' => $cleatRepository->findAll(), //pas la peine pcq'on les réccupère autrement (voir au-dessus)
            'cleats' => $products,
            'form' => $form->createView()
        ]);

        // $titre = "bonjour";
        // return $this->render('home.html.twig', [
        //     'titre' => $titre,
        // ]);
    }

    /**
     * @Route("/compte", name="compte")
     */
    public function login(CleatRepository $cleatRepository, PanierRepository $panierRepository): Response //pour avoir la variable de tous les crampons
    {
        $user = $this->getUser();

        return $this->render('compte.html.twig', [
            //'paniers' => $panierRepository->findAll(),
            'cleats' => $cleatRepository->findAll(), //pour avoir tous les crampons
            'panier' => $user->getPanier() //un pannier possède des cleats
        ]);
    }
}