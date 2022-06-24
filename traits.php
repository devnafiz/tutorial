<?php

  trait Proggrammin{

    public function php(){

    	echo "PHp is proggraming language";
    }
  }

  trait proggrammin2{

  	public function Cp(){

  		echo "c is progrming lang";
  	}
  }

   class  proggram{

   	use proggrammin2;
   	use Proggrammin;

   }

     $pr = new proggram();

     $pr->Cp();
     $pr->php();


?>