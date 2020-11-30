<div class="content">
<?php $user = UserData::getById($_GET["id"]);
 

$post= DeduccionData::getById($_GET["id"]);
?>
    
<div class="row">
	<div class="col-md-12">
	<h1>Editar Usuario</h1>
	
        <form class="form-horizontal" method="post" id="addproduct" enctype="multipart/form-data" action="index.php?view=updateuser" role="form">
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
    <label for="inputEmail1" class="col-lg-2 control-label">usuario*</label>
    <div class="col-md-3">
      <input type="text" name="username" value="<?php echo $user->username;?>" class="form-control" id="username" placeholder="Nombre de usuario">
    </div>
    
    
       

    <label for="inputEmail1" class="col-lg-1 control-label">Email*</label>
    <div class="col-md-3">
      <input type="text" name="email" value="<?php echo $user->email;?>" class="form-control" id="email" placeholder="Email">
    </div>
 
  </div>
    
 

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Comision (%)</label>
    <div class="col-md-6">
      <input type="text" value="<?php echo $user->comision; ?>" name="comision" class="form-control" id="inputEmail1" placeholder="Comision de ventas(%)">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Contrase&ntilde;a</label>
    <div class="col-md-6">
      <input type="password" name="password" class="form-control" id="inputEmail1" placeholder="La contrase&ntilde;a solo se modificara si escribes algo, en caso contrario no se modifica.">

    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Almacen</label>
    <div class="col-md-6">
    <?php 
$clients = DepartamentoData::getAll();
    ?>
    <select name="departamento_id" class="form-control" required>
    <option value="">-- NINGUNO --</option>
    <?php foreach($clients as $client):?>
      <option value="<?php echo $client->id;?>" <?php if($client->id==$user->departamento_id){ echo "selected"; }?>><?php echo $client->name;?></option>
    <?php endforeach;?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">rol</label>
    <div class="col-md-6">
    <?php 
$clien = RolData::getAll();
    ?>
    <select name="rol_id" class="form-control" required>
    <option value="">-- NINGUNO --</option>
    <?php foreach($clien as $clie):?>
      <option value="<?php echo $clie->id;?>" <?php if($clie->id==$user->rol_id){ echo "selected"; }?>><?php echo $clie->name;?></option>
    <?php endforeach;?>
      </select>
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
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-success">Actualizar Usuario</button>
    </div>
  </div>
                    
</form>
	</div>
        </div>
</div>
    
     <script type="text/javascript">
        $(document).ready(function () {
            $('#addproduct').submit(function (e) {
              //captura todos los valores que tiene el formulario es decir todos los input que esten en ese formulario...
             swal(
                 'ACTUALIZAR USUARIOS',
                 'USUARIOS ACTUALIZADO EXITOSAMENTE',
                 'success'
                 );
            });
        });
    </script>
</div>