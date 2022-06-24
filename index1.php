<?php


 class UserData{
             public $user;
             public $userId;

             private $age ="23";
             

             public function __construct($userName,$userId){
                $this->user =$userName;
                $this->userId =$userId;

               
             }

            


             public  function display(){

               echo "User Name is {$this->user} and User Id {$this->userId} <br/>";

               echo "inside Aage".$this->age;

             }


 }


 class Admin extends UserData{
   public $level;
    public function display(){

      echo "user Name {$this->user} and User Id {$this->userId} and user level {$this->level}";
       echo "inside Aage".$this->age;
    }


 }


 $user ="muamon";
 $userId= "12";

 $ur = new UserData($user,$userId);

 $ur->display();

 $user ="admin";
 $userId= "1";

//UserData::display();

 $admin =new Admin($user,$userId);

 $admin->level ="admistrator";

 $admin->display();


?>