<?php

abstract class FournisseurDonnees {

	private $franceConnect;
	
	abstract public function getName();
	abstract protected function getFDURL();
	
	
	//TODO fonction permettant de renvoyer la liste des scopes
	
	public function __construct(FranceConnect $franceConnect){
		$this->franceConnect = $franceConnect;
	}
	
	public function getInfo($access_token){
		return $this->franceConnect->getInfoFromFD($this->getFDURL(), $access_token);
	}
		
	
} 