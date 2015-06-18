<?php

require_once("FournisseurDonnees.class.php");

class FDTest extends FournisseurDonnees {
	
	public function getName(){
		return "FD de Test quotient familiale";
	}
	
	protected function getFDURL(){
		return "http://fdp.integ01.dev-franceconnect.fr/quotientFamilial";
	}
	
	public function getInfo($access_token){
		$info = parent::getInfo($access_token);
		return array('quotient' => $info['quotient']) ;
	}
	
}