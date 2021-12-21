<?php

class mainController
{

	public static function helloWorld($request,$context)
	{
		$context->mavariable='hello world';
		return context::SUCCESS;
	}

	
	public static function index($request,$context){
		
		return context::SUCCESS;
	}
	public static function superTest($request,$context)
	{
		$context->param1=$request["param1"];
		$context->param2=$request["param2"];
		return context::SUCCESS;
	}
	public static function userTest($request,$context)
	{
		echo "C'est juste pour tester ";
		//$context->user= utilisateurTable::getUserById($request["user"],$request["pwd"]);
		$context->user= utilisateurTable::getUserByLoginAndPass($request["user"],$request["pwd"]);
		
		return context::SUCCESS;
	}

	public static function reservationTest($request,$context)
	{
		echo "C'est juste pour tester ";
		//$context->reservation= reservationTable::getReservationById($request["id"]);
		$context->reservation= reservationTable::getReservationByVoyage($request["voyage"]);
		return context::SUCCESS;
	}

	public static function trajetTest($request,$context)
	{
		echo "C'est juste pour tester ";
		//$context->trajet= trajetTable::getTrajetById($request["id"]);
		$context->trajet= trajetTable::getTrajet($request["depart"],$request["arrivee"]);
		return context::SUCCESS;
	}

	public static function voyageTest($request,$context)
	{
		echo "C'est juste pour tester ";
		//$context->voyage= voyageTable::getVoyageById($request["id"]);
		$context->voyage= voyageTable::getVoyageByTrajet($request["trajet"]);
		
		return context::SUCCESS;
	}

}
?>