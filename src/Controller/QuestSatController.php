<?php

namespace App\Controller;

use App\Entity\QuestSat;
use App\Form\QuestSatType;
use App\Repository\QuestSatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/satisfaction")
 */
class QuestSatController extends AbstractController
{
    /**
     * @Route("/", name="quest_sat_index", methods={"GET"})
     */
    public function index(QuestSatRepository $questSatRepository): Response
    {
        return $this->render('quest_sat/index.html.twig', ['quest_sats' => $questSatRepository->findAll()]);
    }

    /**
     * @Route("/new", name="quest_sat_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $questSat = new QuestSat();
        $form = $this->createForm(QuestSatType::class, $questSat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($questSat);
            $entityManager->flush();

            return $this->redirectToRoute('event_index');
        }

        return $this->render('quest_sat/new.html.twig', [
            'quest_sat' => $questSat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="quest_sat_show", methods={"GET"})
     */
    public function show(QuestSat $questSat): Response
    {
        return $this->render('quest_sat/show.html.twig', ['quest_sat' => $questSat]);
    }

    /**
     * @Route("/{id}/edit", name="quest_sat_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, QuestSat $questSat): Response
    {
        $form = $this->createForm(QuestSatType::class, $questSat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('quest_sat_index', ['id' => $questSat->getId()]);
        }

        return $this->render('quest_sat/edit.html.twig', [
            'quest_sat' => $questSat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="quest_sat_delete", methods={"DELETE"})
     */
    public function delete(Request $request, QuestSat $questSat): Response
    {
        if ($this->isCsrfTokenValid('delete'.$questSat->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($questSat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('quest_sat_index');
    }
}
