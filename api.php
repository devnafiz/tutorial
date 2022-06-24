<?php
    $ch =curl_init();

    $url ="https://reqres.in/api/users?page=2";

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $resp = curl_exec($ch);
    if($e = curl_error($ch)){

    	echo $e;
    }else{

    	$decoded =json_decode($resp,true);

    	$data_value=$decoded;

    	//print_r($data_value);
    	//echo $data_value[0]->page;
    	
    }

    curl_close($ch);


    echo '<table>';

      foreach($data_value as $key=>$data1){

      	 foreach($data1 as $key2=>$val){

      	 	echo '<tr><td>' . $val['first_name'] . '</tr></td>';
      	 }
      	//$name = $data1['1']['id'];


      	
      }

    echo '</table>';

?>
