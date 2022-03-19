<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Form\SearchForm;
use App\Entity\Cleat;
use App\Entity\User;
use App\Entity\Panier;
use App\Form\CleatType;
use App\Repository\CleatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/cleat")
 */
class CleatController extends AbstractController
{
    /**
     * @Route("/", name="app_cleat_index", methods={"GET"})
     */
    public function index(CleatRepository $cleatRepository, Request $request): Response
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
    }

    /**
     * @Route("/new", name="app_cleat_new", methods={"GET", "POST"})
     */
    public function new(Request $request, CleatRepository $cleatRepository): Response
    {
        $cleat = new Cleat();
        $form = $this->createForm(CleatType::class, $cleat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cleatRepository->add($cleat);
            return $this->redirectToRoute('app_cleat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cleat/new.html.twig', [
            'cleat' => $cleat,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_cleat_show", methods={"GET"})
     */
    public function show(Cleat $cleat): Response
    {
        return $this->render('cleat/show.html.twig', [
            'cleat' => $cleat,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_cleat_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Cleat $cleat, CleatRepository $cleatRepository): Response
    {
        $form = $this->createForm(CleatType::class, $cleat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cleatRepository->add($cleat);
            return $this->redirectToRoute('app_cleat_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('cleat/edit.html.twig', [
            'cleat' => $cleat,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_cleat_delete", methods={"POST"})
     */
    public function delete(Request $request, Cleat $cleat, CleatRepository $cleatRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cleat->getId(), $request->request->get('_token'))) {
            $cleatRepository->remove($cleat);
        }

        return $this->redirectToRoute('app_cleat_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/add-cleat/{id1}/{id2}", name="panier_add_cleat")
     */
    public function add_cleat(int $id1, int $id2, CleatRepository $cleatRepository): Response //dans la table panier_cleat
    { 
        $entityManager = $this->getDoctrine()->getManager(); //pour que la BDD soit modifier
        
        $repo1 = $this->getDoctrine()->getRepository(Panier::class);
        $repo2 = $this->getDoctrine()->getRepository(Cleat::class);

        $panier = $repo1->find($id1);
        $cleat = $repo2->find($id2);

        $panier->addName($cleat); //dans la class panier il y a un addName()
        $user = $this->getUser();

        $entityManager->persist($panier); //pour que la BDD soit modifier
        $entityManager->flush(); //pour que la BDD soit modifier
    
        // return $this->render('cleat/index.html.twig', [
        //     'cleats' => $cleatRepository->findAll(),
        //     'panier' => $panier,
        //     'user' => $user
        // ]);

        return $this->render('compte.html.twig', [
            'cleats' => $cleatRepository->findAll(), //pour avoir tous les crampons
            'panier' => $user->getPanier() //un pannier possède des cleats
        ]);
    }
}
