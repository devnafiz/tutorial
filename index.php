<?php


spl_autoload_register(function($class_name){

	include "class/".$class_name.".php";
});



$mngMysql= new manageMsql;

$mngMysql->setHost('');
$mngMysql->setDb('');
$mngMysql->setUser('');
$mngMysql->setPass('');
$mngMysql->connect('');




$lite= new MSQlLight;

$lite->setHost('');
$lite->setDb('');
$lite->setUser('');
$lite->setPass('');
$lite->connect('');



?>