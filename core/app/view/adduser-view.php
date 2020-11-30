<?php

if(count($_POST)>0){
    $is_admin=0;
    if(isset($_POST["is_admin"])){$is_admin=1;}
	
    
    
          $d = UserData::getbyemail($_POST["email"]);
        
    if($d==null){
          $f= UserData::getbyusername($_POST["username"]);
     if($f==null){
         
          
	$user = new UserData();

	$user->rol_id = isset($_POST["rol_id"])?$_POST["rol_id"]:"NULL";
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

	$user->cedula = $_POST["cedula"];
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->username = $_POST["username"];
	$user->email = $_POST["email"];
	$user->password = sha1(md5($_POST["password"]));
	
        
        $user->add();
       
        
print "<script>swal(
               'AGREGAR NUEVO USUARIOS',
               'USUARIOS GUARDADO EXITOSAMENTE',
               'success');
               window.location='index.php?view=users';</script>";

    } else {
         print "<script> swal(
               'usuarios ya existe nuestra base de datos',
               'Por favor asignale otro usuarios',
               'error');
               </script>";
    }
	

}else{
  print  "<script> swal(
               'email ya existe nuestra base de datos',
               'Por favor asignale otro email',
               'error');
               </script>";
}
     }
      


?>