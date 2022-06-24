<?php

  class Car{


      function bmw(){


      }
       function bmw2(){


      }


  }
 $the_method = get_class_methods('Car');

 foreach($the_method as $value){

  echo $value."<br/>" ;
 }

?>