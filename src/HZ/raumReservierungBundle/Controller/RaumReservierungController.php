<?php

namespace HZ\raumReservierungBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use HZ\raumReservierungBundle\Entity\Reservierung;
use HZ\raumReservierungBundle\Entity\ConfirmationPin;
use HZ\raumReservierungBundle\Entity\kontakt;
use HZ\raumReservierungBundle\Entity\Raum;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;



class RaumReservierungController extends Controller
{


    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $gebaeude = $em->getRepository('HZraumReservierungBundle:Gebaeude')->findAll();
        return $this->render('HZraumReservierungBundle:RaumHtml:index.html.twig', array('gebaeude' => $gebaeude));
    }

    public function gebauedeRaumAction($gebaeude , $name ,Request $reques){

      $em = $this->getDoctrine()->getManager();
      $raeume = $em->getRepository('HZraumReservierungBundle:Raum')->byGebaeude($gebaeude);
      $studentRaum = $em->getRepository('HZraumReservierungBundle:Raum')->studentRaumByGebaeude($gebaeude);
      return $this->render('HZraumReservierungBundle:RaumHtml:gebauedeRaum.html.twig', array('raeume' => $raeume, 'name' => $name, 'studentRaum' => $studentRaum));
    }

    public function raumInfosAction($raum , Request $request){
      $em = $this->getDoctrine()->getManager();
      $infos = $em->getRepository('HZraumReservierungBundle:Raum')->find($raum);
      return $this->render('HZraumReservierungBundle:RaumHtml:raumInfos.html.twig', array('infos' => $infos));
    }

    public function reservierungAction($raumId, $raumFrei, Request $request){

      $reservierung = new Reservierung();
      $confirmationPin = new ConfirmationPin();

      $form = $this->createForm('HZ\raumReservierungBundle\Form\ReservierungType', $reservierung);
      $form->handleRequest($request);
      $confirmationPin->setPin(mt_rand(1000, 9999));
      $random = $confirmationPin->getPin();

      $reservierung->setRaum($raumId);
      $em = $this->getDoctrine()->getManager();
      $reservationDate = $em->getRepository('HZraumReservierungBundle:reservierung')->dateCompare($raumId);
$count = 0;

      if ($form->isSubmitted() && $form->isValid()) {
        foreach ($reservationDate as $value) {
          $startDate = $value->getStart()->format('Y-m-d H:i:s');
          $endDate = $value->getEnd()->format('Y-m-d H:i:s');
          if ($startDate <= $reservierung->getStart()->format('Y-m-d H:i:s') && $reservierung->getStart()->format('Y-m-d H:i:s') <= $endDate || $startDate <= $reservierung->getEnd()->format('Y-m-d H:i:s') && $reservierung->getEnd()->format('Y-m-d H:i:s') <= $endDate){
            if($reservierung->getStart()->format('Y-m-d H:i:s') > $reservierung->getEnd()->format('Y-m-d H:i:s') || $reservierung->getEnd()->format('Y-m-d H:i:s') < $reservierung->getStart()->format('Y-m-d H:i:s') || $reservierung->getEnd()->format('Y-m-d H:i:s') == $reservierung->getStart()->format('Y-m-d H:i:s')){
              $count++;
              $flashBag = $this->get('session')->getFlashBag();
              $flashBag->get('user-notice'); // gets message and clears type
              $flashBag->set('user-notice', '!! Ungültige Dateneingabe!!');
            }
            $count++;
            $flashBag = $this->get('session')->getFlashBag();
            $flashBag->get('user-notice'); // gets message and clears type
            $flashBag->set('user-notice', '!! keine Reservierung möglich für dieses Datum!!');
          }
        }
        if(!$count){
          $em = $this->getDoctrine()->getManager();
          $em->persist($reservierung);
          $em->persist($confirmationPin);
          $em->flush();
          return $this->render('HZraumReservierungBundle:RaumHtml:confirmation.html.twig', array('random' => $random));
        }
      }


      $em = $this->getDoctrine()->getManager();

      $reservationDate = $em->getRepository('HZraumReservierungBundle:Reservierung')->dateCompare($raumId);
      $datesArray = [];
      foreach ($reservationDate as $key => $date) {
        $datesArray[$key] = $date->toArray();
      }

      return $this->render('HZraumReservierungBundle:RaumHtml:reservierung.html.twig',
      array(
          'raumId' => $raumId,
          'raumFrei' => $raumFrei,
          'reservierung' => $reservierung,
          'form' => $form->createView(),
          'reservationDate' => $reservationDate,
          'dates' => json_encode($datesArray)
        ));

    }


    public function kontaktAction(Request $request){
      $kontakt = new kontakt();
      $form = $this->createForm('HZ\raumReservierungBundle\Form\kontaktType', $kontakt);


      $em = $this->getDoctrine()->getManager();
      $form->handleRequest($request);
              if ($form->isSubmitted() && $form->isValid()) {
                  $em->persist($kontakt);
                  $em->flush();
      $flashBag = $this->get('session')->getFlashBag();
      $flashBag->get('user-notice'); // gets message and clears type
      $flashBag->set('user-notice', '!! Wir danken Ihnen !!');
      return $this->redirectToRoute('h_zraum_reservierung_homepage');
    }
      return $this->render('HZraumReservierungBundle:RaumHtml:kontakt.html.twig', array('form'=>$form->createView()));

    }

    public function searchAction($raumId)
{
  $em = $this->getDoctrine()->getManager();

  $reservationDate = $em->getRepository('HZraumReservierungBundle:Reservierung')->dateCompare($raumId);
$datesArray = [];
foreach ($reservationDate as $key => $date) {
  $datesArray[$key] = $date->toArray();
}

   $response = new JsonResponse($datesArray);
   //$response->headers->set('Content-Type', 'application/json');

  //var_dump($reservationDate[0]->getArray());
//die();
   return  $response;

}
}
