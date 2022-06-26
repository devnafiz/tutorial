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

			$mngMysql->setHost($host);
			$mngMysql->setDb($db);
			$mngMysql->setUser($user);
			$mngMysql->setPass($password);
		$this->link	=$mngMysql->connect();

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