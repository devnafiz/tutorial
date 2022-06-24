<?php

class Student{
   public $name;

	public function describ(){

		echo 'Iam Student<br/>';
	}

	public function __get($pm){

		echo "$pm  not exist";
	}

	public function __set($pm,$value){

		echo "This u $pm->$value";
	}
}

$st= new Student();


$st->describ();

$st->nafiz;

$st->age='112';


?>