<?php
  class Person{

     public $name ="hasan";
     public $age ="34";
     public $skill ="bloging";

     private $email ="hasan@gmail.com";
     protected $password ="123";

     function IteretInner(){
        echo "Inner class";
     	foreach ($this as $key => $value) {
     		
           echo "<pre>";

           echo "$key=>$value";
           echo "</pre>";

     	}
     }


  }



?>