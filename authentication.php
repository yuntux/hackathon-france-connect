<?php

require_once("init.php");

$sup_scope = array("revenu_fiscal_de_reference","attestation_droit","adresse_postale");
//$sup_scope = array();
$franceConnect->authenticationRedirect($url_callback,$sup_scope);

