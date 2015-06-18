<?php
require_once("init.php");

$_SESSION['user_info'] = $franceConnect->callback();
$access_token = $_SESSION['user_info']['access_token']; 

$fdTest = new FDTest($franceConnect);
$_SESSION['fd_user_info'][$fdTest->getName()] = $fdTest->getInfo($access_token);

$fdGuichet = new FDGuichetBreton($franceConnect);
$_SESSION['fd_user_info'][$fdGuichet->getName()] = $fdGuichet->getInfo($access_token);



header("Location: index.php");
