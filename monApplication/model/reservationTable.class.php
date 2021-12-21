<?php
// Inclusion de la classe reservation
require_once "reservation.class.php";

class reservationTable {

  public static function getReservationById($id)
	{
  	$em = dbconnection::getInstance()->getEntityManager();

	$reservationRepository = $em->getRepository('reservation');
	$reservation = $reservationRepository->findOneBy(array('id' => $id));	
	
	if ($reservation == false){
		echo 'Erreur sql';
			   }
	return $reservation; 
	}
 public static function getReservationByVoyage($voyage)
	{
  	$em = dbconnection::getInstance()->getEntityManager();

	$reservationRepository = $em->getRepository('reservation');
	$reservation = $reservationRepository->findBy(array('voyage' => $voyage));	
	
	if ($reservation == false){
		echo 'Erreur sql';
			   }
	return $reservation; 
	}
  
}


?>
