<?php
session_start();

require_once(__DIR__."/lib/CurlWrapper.class.php");
require_once(__DIR__."/lib/FranceConnect.class.php");
require_once(__DIR__."/lib/FDTest.class.php");
require_once(__DIR__."/lib/FDGuichetBreton.class.php");

require_once("LocalSettings.php");

$franceConnect = new FranceConnect($france_connect_base_url, $client_id,$secret_id,$url_callback);

header("Content-type: text/html; charset=utf-8");
