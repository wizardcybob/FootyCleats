<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Cleat;
use App\Entity\User;
use App\Form\PanierType;
use App\Repository\PanierRepository;
use App\Repository\CleatRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/panier")
 */
class PanierController extends AbstractController
{
    /**
     * @Route("/", name="app_panier_index", methods={"GET"})
     */
    public function index(PanierRepository $panierRepository, userRepository $userRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        return $this->render('panier/index.html.twig', [
            'paniers' => $panierRepository->findAll(),
            'users' => $userRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_panier_new", methods={"GET", "POST"})
     */
    public function new(Request $request, PanierRepository $panierRepository): Response
    {
        $panier = new Panier();
        $form = $this->createForm(PanierType::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $panierRepository->add($panier);
            ///////////////////////////////
            $entityManager = $this->getDoctrine()->getManager();
 
            $cleats = $panier->getName();  // Récupère les données saisies = tableaux des clés
            foreach ($cleats as $a) {             // Pour chaque élément du tableau
                $a->addPanier($panier);                // Ajoute le château édité à la liste des entités en relation
                $entityManager->persist($a);           // Ajoute la ligne dans la table "stockant" la relation
            }
            $entityManager->persist($panier);
            $entityManager->flush();
            /////////////////////////
            return $this->redirectToRoute('app_panier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('panier/new.html.twig', [
            'panier' => $panier,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_panier_show", methods={"GET"})
     */
    public function show(Panier $panier, User $user): Response
    {
        return $this->render('panier/show.html.twig', [
            'panier' => $panier,
            'user' => $user
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_panier_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Panier $panier, PanierRepository $panierRepository): Response
    {
        $form = $this->createForm(PanierType::class, $panier);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $panierRepository->add($panier);
            /////////////////////////
            $entityManager = $this->getDoctrine()->getManager(); //pour que la BDD soit modifier
 
            $cleats = $panier->getName();  // Récupère les données saisies = tableaux des clés
            foreach ($cleats as $a) {             // Pour chaque élément du tableau
                $a->addPanier($panier);                // Ajoute le château édité à la liste des entités en relation
                $entityManager->persist($a);           // Ajoute la ligne dans la table "stockant" la relation
            }
            $entityManager->persist($panier); //pour que la BDD soit modifier
            $entityManager->flush(); //pour que la BDD soit modifier
            /////////////////////////
            return $this->redirectToRoute('app_panier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('panier/edit.html.twig', [
            'panier' => $panier,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_panier_delete", methods={"POST"})
     */
    public function delete(Request $request, Panier $panier, PanierRepository $panierRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$panier->getId(), $request->request->get('_token'))) {
            $panierRepository->remove($panier);
        }

        return $this->redirectToRoute('app_panier_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/delete-cleat/{id1}/{id2}", name="panier_delete_cleat")
     */
     public function delete_cleat(int $id1, int $id2): Response //dans la table panier_cleat
     { 
        $entityManager = $this->getDoctrine()->getManager(); //pour que la BDD soit modifier
        
        $repo1 = $this->getDoctrine()->getRepository(Panier::class);
        $repo2 = $this->getDoctrine()->getRepository(Cleat::class);

        $panier = $repo1->find($id1);
        $cleat = $repo2->find($id2);

        $panier->removeName($cleat);
        $user = $this->getUser();

        $entityManager->persist($panier); //pour que la BDD soit modifier
        $entityManager->flush(); //pour que la BDD soit modifier
    
        return $this->render('panier/show.html.twig', [
            'panier' => $panier,
            'user' => $user
        ]);
     }
}
