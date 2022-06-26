<?php


spl_autoload_register(function($class_name){

	include "class/".$class_name.".php";
});



// $db =new Database;

// $db->setDriver('mysql');

// $db->connection('localhost','school','root','');


new Singleton_Design();
new Singleton_Design();

new Singleton_Design();










?>