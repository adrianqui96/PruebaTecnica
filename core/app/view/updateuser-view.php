<?php

if(count($_POST)>0){
	$user = UserData::getById($_POST["user_id"]);
        $user->departamento_id = isset($_POST["departamento_id"])?$_POST["departamento_id"]:"NULL";
	$user->rol_id = isset($_POST["rol_id"])?$_POST["rol_id"]:"NULL";
	$user->comision = isset($_POST["comision"])&&$_POST["comision"]!=""?$_POST["comision"]:"NULL";

  if(isset($_FILES["image"])){
    $image = new Upload($_FILES["image"]);
    if($image->uploaded){
      $image->Process("storage/profiles/");
      if($image->processed){
        $user->image = $image->file_dst_name;
      }
    }
  }
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->username = $_POST["username"];
	
        $user->email = $_POST["email"];
       $user->status = isset($_POST["status"])?1:0;
	$user->update();

	if($_POST["password"]!=""){
		$user->password = sha1(md5($_POST["password"]));
		$user->update_passwd();


	}

print "<script>window.location='index.php?view=users';</script>";


}


?>