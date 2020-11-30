<?php

if(count($_POST)>0){
	$user = PersonData::getById($_POST["emple_id"]);
	$user->cedula = $_POST["cedula"];
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->address = $_POST["address"];
	
  
        $user->users_id = $_SESSION["users_id"];
$user->status = isset($_POST["status"])?1:0;
       

  if(isset($_FILES["image"])){
    $image = new Upload($_FILES["image"]);
    if($image->uploaded){
      $image->Process("storage/profiles/");
      if($image->processed){
        $user->image = $image->file_dst_name;
      }
    }
  }
       
       $user->update();

print "<script>window.location='index.php?view=clientes';</script>";


}


?>