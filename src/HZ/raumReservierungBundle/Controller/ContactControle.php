<?php

namespace HZ\raumReservierungBundle\Controller;

use HZ\raumReservierungBundle\Entity\kontact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
* 
*/
class ContatControle extends Controller
{
	
	/**
     * Lists all kontakt entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservierungKontacts = $em->getRepository('HZraumReservierungBundle:kontakt')->findAll();

        return $this->render('kontakt/index.html.twig', array(
            'reservierungKontacts' => $reservierungKontacts,
        ));
    }

    /**
     * Creates a new reservierungKontact entity.
     *
     */
    public function newAction(Request $request)
    {
        $reservierungKontact = new kontakt();
        $form = $this->createForm('HZ\raumReservierungBundle\Form\kontakt', $reservierungKontact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservierungKontact);
            $em->flush();

            return $this->redirectToRoute('kontct_show', array('id' => $reservierungKontact->getId()));
        }

        return $this->render('kontakt/new.html.twig', array(
            'reservierungKontact' => $reservierungKontact,
            'form' => $form->createView(),
        ));
    }
}