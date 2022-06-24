<?php
interface School{

    public function myschool();
}

class Teacher implements School{

    public function __construct(){

        $this->myschool();
    }

    public function myschool(){

        echo "I am School Teacher";
    }
}


$teacher=new Teacher();

?>