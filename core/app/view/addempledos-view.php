<?php

if(count($_POST)>0){
$user = new PersonData();
$user->cedula = $_POST["cedula"];
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->cedula = $_POST["cedula"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->address = $_POST["address"];
	$user->status = $_POST["status"]=1;
	
        $user->users_id = $_SESSION["users_id"];
$user->image="";
  if(isset($_FILES["image"])){
    $image = new Upload($_FILES["image"]);
    if($image->uploaded){
      $image->Process("storage/profiles/");
      if($image->processed){
        $user->image = $image->file_dst_name;
      }
    }
  }

  $int= $user->add();    
print "<script>window.location='index.php?view=clientes';</script>";

  
     }
      


?>