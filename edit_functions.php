<?php

   require_once(".../config_global.php")
   $database = if15_merit26_1;
   
   function getSingleCarData($id){
	   
	   $mysqli = new mysqli($GLOBALS["servername"], $GLOBALS["server_username"]), GLOBALS["server_username"])
	   
	   $stmt = $mysqli->prepare("SELECT number_plate, color FROM car_plates WHERE id=? AND deleted IS NULL");
	   $stmt -> bind_param("i", $id);
	   $stmt -> bind_result($number_plate, $color);
       
	   $car = new StdClass();
	   
	   
   //kas sain andmed
   if($stmt->fetch()){
	   
	    $car = getSingleCarData($_GET["edit_id"])
   		VarDump($car);
		
   }else{
	//ei tulnud kui id ei olnud   
	   
	   
   }   }
   
   
   
?> 