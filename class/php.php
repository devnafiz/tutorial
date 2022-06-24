<?php
    class Php{

    	// function __construct(){

    	// 	echo "  now I maRead Php";
    	// }

        public static function framwork(){

            //echo "chak php is fromwork.<br/>";
           // return $this;
            echo static::getClass();

        }
         public function cms(){
                self::framwork();
            // echo "Wordpresss php is fromwork";
            //  return $this;
        }

        public static function getClass(){

            return __CLASS__;
        }
    }




?>