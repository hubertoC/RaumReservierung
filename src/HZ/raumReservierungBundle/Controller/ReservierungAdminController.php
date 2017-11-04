<?php

namespace HZ\raumReservierungBundle\Controller;

use HZ\raumReservierungBundle\Entity\ReservierungAdmin;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Reservierungadmin controller.
 *
 */
class ReservierungAdminController extends Controller
{
    /**
     * Lists all reservierungAdmin entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservierungAdmins = $em->getRepository('HZraumReservierungBundle:ReservierungAdmin')->findAll();

        return $this->render('reservierungadmin/index.html.twig', array(
            'reservierungAdmins' => $reservierungAdmins,
        ));
    }

    /**
     * Creates a new reservierungAdmin entity.
     *
     */
    public function newAction(Request $request)
    {
        $reservierungAdmin = new Reservierungadmin();
        $form = $this->createForm('HZ\raumReservierungBundle\Form\ReservierungAdminType', $reservierungAdmin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservierungAdmin);
            $em->flush();

            return $this->redirectToRoute('admin_reservierungadmin_show', array('id' => $reservierungAdmin->getId()));
        }

        return $this->render('reservierungadmin/new.html.twig', array(
            'reservierungAdmin' => $reservierungAdmin,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reservierungAdmin entity.
     *
     */
    public function showAction(ReservierungAdmin $reservierungAdmin)
    {
        $deleteForm = $this->createDeleteForm($reservierungAdmin);

        return $this->render('reservierungadmin/show.html.twig', array(
            'reservierungAdmin' => $reservierungAdmin,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reservierungAdmin entity.
     *
     */
    public function editAction(Request $request, ReservierungAdmin $reservierungAdmin)
    {
        $deleteForm = $this->createDeleteForm($reservierungAdmin);
        $editForm = $this->createForm('HZ\raumReservierungBundle\Form\ReservierungAdminType', $reservierungAdmin);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_reservierungadmin_edit', array('id' => $reservierungAdmin->getId()));
        }

        return $this->render('reservierungadmin/edit.html.twig', array(
            'reservierungAdmin' => $reservierungAdmin,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reservierungAdmin entity.
     *
     */
    public function deleteAction(Request $request, ReservierungAdmin $reservierungAdmin)
    {
        $form = $this->createDeleteForm($reservierungAdmin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reservierungAdmin);
            $em->flush();
        }

        return $this->redirectToRoute('admin_reservierungadmin_index');
    }

    /**
     * Creates a form to delete a reservierungAdmin entity.
     *
     * @param ReservierungAdmin $reservierungAdmin The reservierungAdmin entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ReservierungAdmin $reservierungAdmin)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_reservierungadmin_delete', array('id' => $reservierungAdmin->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
