<?php

 abstract class School{

        public $name;
        public $age;


        public function details(){

        	echo "This is".$this->name."is age :".$this->age;
        }

        abstract public function tacher();


  }


  class Boy extends School{


       public function student(){

       	return $this->details();
       }

       public function tacher(){

       	return "This a good boy";
       }

  }


  $s=new boy();

  $s->name="hasan";
  $s->age ="15";

  $s->student();

 echo $s->tacher();


?>