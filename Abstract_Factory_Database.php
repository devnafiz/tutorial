<?php

abstract class Abstract_Factory_Database(){


	public function connect();//this  method for  overwrite 
	public function query();//this  method for  overwrite
	public function insertId();

	public function setHost($host){


	}

	public  function setDb($db){

		//write  db function
	}

	public function setUser($user){

		//write user  detail
	}

	public function setPass($pass){

		//write db passs
	}
}



?>