<?php

namespace App\Controller;

use App\Entity\RetourEvent;
use App\Form\RetourEventType;
use App\Repository\AnnualResult;
use App\Repository\RetourEventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/retour/event")
 */
class RetourEventController extends AbstractController
{
    /**
     * @Route("/", name="retour_event_index", methods={"GET"})
     */
    public function index(RetourEventRepository $retourEventRepository): Response
    {
        return $this->render('retour_event/index.html.twig', ['retour_events' => $retourEventRepository->findAll()]);
    }

    /**
     * @Route("/new", name="retour_event_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $retourEvent = new RetourEvent();
        $form = $this->createForm(RetourEventType::class, $retourEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($retourEvent);
            $entityManager->flush();

            return $this->redirectToRoute('retour_event_index');
        }

        return $this->render('retour_event/new.html.twig', [
            'retour_event' => $retourEvent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="retour_event_show", methods={"GET"})
     */
    public function show(RetourEvent $retourEvent): Response
    {
        return $this->render('retour_event/show.html.twig', ['retour_event' => $retourEvent]);
    }

    /**
     * @Route("/{id}/edit", name="retour_event_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, RetourEvent $retourEvent): Response
    {
        $form = $this->createForm(RetourEventType::class, $retourEvent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('retour_event_index', ['id' => $retourEvent->getId()]);
        }

        return $this->render('retour_event/edit.html.twig', [
            'retour_event' => $retourEvent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="retour_event_delete", methods={"DELETE"})
     */
    public function delete(Request $request, RetourEvent $retourEvent): Response
    {
        if ($this->isCsrfTokenValid('delete'.$retourEvent->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($retourEvent);
            $entityManager->flush();
        }

        return $this->redirectToRoute('retour_event_index');
    }

    /**
     * @Route("/resultat", name="retour_event_resultat")
     */
    public function getGraphic(AnnualResult $annualResult, RetourEventRepository $retourEventRepository) :AnnualResult
    {
        $total = $retourEventRepository->findAll();
        $total->getJanvierResult();

        return $this->render('/resultat.html.twig');
    }
}
