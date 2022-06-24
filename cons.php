<?php

class Parson{

       public $name;

       public function __construct($name){

       	//echo "new programmer on";

              $this->name=$name;
       }


       public function new_man(){


       echo "he is ".$this->name;
       }



}

$man = new Parson('hsasan');

$man->new_man();

?>