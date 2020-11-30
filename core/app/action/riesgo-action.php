<?php
if(isset($_GET["opt"]) && $_GET["opt"]=="add"){
    $status=0; 
           if(isset($_POST["status"])){$status=1;}
        $user = new RiesgoData();
        $user->poliza_id = $_POST["poliza_id"]!=""?$_POST["poliza_id"]:"NULL";
	$user->name = $_POST["name"];
	 $user->status=$status;
      
	$user->add();
Core::redir("./index.php?view=riesgoso&opt=all");
        

	
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="upd"){
	$user = RiesgoData::getById($_POST["user_id"]);
	$user->name = $_POST["name"];
	$user->sueldo = $_POST["sueldo"];
         $user->status = isset($_POST["status"])?1:0;
	$user->update();
	Core::redir("./index.php?view=riesgoso&opt=all");

}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
$category = RiesgoData::getById($_GET["id"]);

$category->del();
Core::redir("./index.php?view=riesgoso&opt=all");
}


?>