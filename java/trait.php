<?php

trait Java{

     public function JavaCoder(){
     	echo "Iam java cocder";
     }
}

trait Php{

	public function PhpCoder(){

		echo "Iam php coder";
	}


}


class CoderOne{
   use Java;

}


class CoderTwo{
  use Php;

}

$coderOne =new CoderOne;

echo $coderOne->JavaCoder();


?>