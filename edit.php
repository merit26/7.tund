<?php

   require_once("edit_functios.php")
   
   if(isset($_GET["edit.id"])){
	//trükin aadressirealt muutuja   
 <th>Edit</th>
   echo $_GET["edit.id"]
    
	
	//

    }else{ 
	//kui muutujat ei ole
	header("Location .php")
	
	
	}
?> 