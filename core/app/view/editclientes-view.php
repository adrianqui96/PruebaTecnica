<div class="content">
<?php $user = PersonData::getById($_GET["id"]);
?>
    
<div class="row">
	<div class="col-md-12">
	<h1>Editar Empleados</h1>
	
        <form class="form-horizontal" method="post" id="addproduct" enctype="multipart/form-data" action="index.php?view=updateclientes" role="form">
        <div class="col-md-2">
             <div class="box box-primary">
            <div class="box-body box-profile">
                <div id="load_img">
                       <?php
          if($user->image!=""){
            $url = "storage/profiles/".$user->image;
            if(file_exists($url)){
              echo "<img class='img-responsive' src='$url'>";
            }
          }
          ?><br>
            
      <input type="file" name="image" id="image">
  
		 	 
                </div>

 </div>
          </div>
            
        </div>

<div class="col-md-10">
 
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-3">
      <input type="text" name="name" value="<?php echo $user->name;?>" class="form-control" id="name" placeholder="Nombre">
    </div>
    
    
    <label for="inputEmail1" class="col-lg-1 control-label">Apellido*</label>
    <div class="col-md-3">
      <input type="text" name="lastname" value="<?php echo $user->lastname;?>" class="form-control" id="lastname" placeholder="Apellido">
    </div>
  
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
    <div class="col-md-3">
      <input type="text" name="phone" value="<?php echo $user->phone;?>" class="form-control" id="username" placeholder="Nombre de usuario">
    </div>
    
    
       

    <label for="inputEmail1" class="col-lg-1 control-label">Email*</label>
    <div class="col-md-3">
      <input type="text" name="email" value="<?php echo $user->email;?>" class="form-control" id="email" placeholder="Email">
    </div>
 
  </div>
    
 

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion</label>
    <div class="col-md-6">
      <input type="text" value="<?php echo $user->address; ?>" name="address" class="form-control" id="inputEmail1" placeholder="Comision de ventas(%)">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label" >Esta activo</label>
    <div class="col-md-6">
<div class="checkbox">
    <label>
      <input type="checkbox" name="status" <?php if($user->status){ echo "checked";}?>> 
    </label>
  </div>
    </div>
  </div>
    
          
         
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="emple_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-success">Actualizar Usuario</button>
    </div>
  </div>
                    
</form>
	</div>
        </div>
</div>
    
 
</div>