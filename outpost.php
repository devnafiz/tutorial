<?php

  $url="https://reqres.in/api/users";


  $ch = curl_init();

  $data_array= array(

        'name'=>'nafiz',
        'job' =>'web developer'
 
  );
  $data =http_build_query($data_array);


  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

  $resp =curl_exec($ch);


  if($e = curl_error($ch)){

  	echo $e;
  }else{

  	$decoded=json_decode($resp);
  	  foreach($decoded as $key =>$val){

  	  	echo $key. ":".$val ."<br/>";
  	  }


  }
  curl_close($ch);






?>
