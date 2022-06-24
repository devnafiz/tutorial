<?php
 class Sample{

 	public function new_saw(){

 		echo "This not need";
 	}
 }
  class FacadeSample{

     public static function __callStatic($name,$properti){


     	(new Sample())->{$name}(...$properti);



     }


  }



 FacadeSample::new_saw();

?>