<?php
if(isset($_GET["opt"]) && $_GET["opt"]=="add"){
   
        $user = new PolizaData();
	$user->name = $_POST["name"];
	$user->porcen = $_POST["porcen"];
	$user->price = $_POST["price"];
	$user->add();
Core::redir("./index.php?view=cubrimientos&opt=all");
        

	
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="upd"){
	$user = PolizaData::getById($_POST["user_id"]);
	$user->name = $_POST["name"];
	$user->porcen = $_POST["porcen"];
	$user->price = $_POST["price"];
	$user->update();
	Core::redir("./index.php?view=cubrimientos&opt=all");
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
$category = PolizaData::getById($_GET["id"]);
$category->del();
Core::redir("./index.php?view=categories&opt=all");
}


?>