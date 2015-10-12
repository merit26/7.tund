<?php

   require_once("edit_functios.php")
   
   if(isset($_GET["edit.id"])){
	//trükin aadressirealt muutuja   
 <th>Edit</th>
   echo $_GET["edit.id"]
    
	
	// //küsin andmed 
    $car = getSingleCarData($_GET["edit_id"]); 
    var_dump($car); 


    }else{ 
	//kui muutujat ei ole (siis ei ole mõtet siia tulla)
	header("Location .php")
	
	
	}
?> 
<!-- Salvestamiseks kasutan table.php rida 15, updateCar() -->
 <form action=table.php method="get">
 <input type="car_id" type="hidden" value="<?=$_GET["edit_id"];?>">
 <input name="car_plate" type="text" value="<?=$car->number_plate;?>"><br>
 <input name="color" type="text" value="<?=$car->color;?>"><br>
 <input name="update" type="submit" >
 
</form>