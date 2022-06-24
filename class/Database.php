<?php

 /**
  * 
  */
 class Database 
 {
 	public $driver;
 	public $link;

 	public function setDriver($driver){

          $this->driver=$driver;
 	}
 	

 	public function connection(){


 		if($this->driver=='mysql'){


			$mngMysql= new manageMsql;

			$mngMysql->setHost('');
			$mngMysql->setDb('');
			$mngMysql->setUser('');
			$mngMysql->setPass('');
		$this->link	=$mngMysql->connect('');

 		}elseif ($this->driver=='lite') {
 			$lite= new MSQlLight;

				$lite->setHost('');
				$lite->setDb('');
				$lite->setUser('');
				$lite->setPass('');
			$this->link=$lite->connect();
 		}
 	}
 }


?>