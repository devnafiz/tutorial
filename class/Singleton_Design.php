<?php
/**
 * 
 */
class Singleton_Design
{
	
	private static $instance;
	function __construct()
	{
		if(!self::$instance){
          self::$instance=$this;

          echo "Create new one</br>";
          return self::$instance;
            
		}else{
            echo "old one</br>";
             return self::$instance;
		}
	}
}




?>