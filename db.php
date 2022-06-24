<?php

    class db{

             public $hostName;
             public $userName;
             public $password;

             public $dbName;
             public $conn;


             public function __construct($hostName,$userName,$password,$dbName){

                      $this->hostName =$hostName;
                      $this->userName =$userName;
                      $this->password =$password;
                      $this->dbName = $dbName;


               $this->conn= mysqli_connect($this->hostName,$this->userName,$this->password,$this->dbName);

               if(! $this->conn){
                  echo mysqli_error($this->conn);

               }else{

                  echo 'connection ok';
               }
             }
               //insert
             public function insert($name,$detail){

               $sql= "INSERT INTO  category(name,details) VALUES ('$name','$detail') ";

               if(mysqli_query($this->conn,$sql)==True){
                echo "data inserted";
               }else{
                   echo mysqli_error($this->conn);
               }
               
             }

             //update

             public  function update(){

                $sql = "UPDATE  category SET
                   name ='Fan', 
                  details ='fan is needed'
                  WHERE id = 2";

                 if(mysqli_query($this->conn,$sql)==True){
                echo "data Updated";
               }else{
                   echo mysqli_error($this->conn);
               }
             }
             //select

             public function select(){
              $sql="SELECT * from category";

              $data =mysqli_query($this->conn,$sql);
              $row = mysqli_fetch_array($data);

             }

    }


    $database = new db('localhost','root','','erp');

    //$database->insert('furnicture','Table is use able  thing');
      $database->select();

?>