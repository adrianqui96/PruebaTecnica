
  
<section class="content">
<div class="row">
     
	<div class="col-md-12">
	<h1>Agregar Usuario</h1>
	<br>
        <div class="col-md-2">
             <div class="box box-primary">
            <div class="box-body box-profile">
                <div id="load_img">
                       
              <img class=" img-responsive" src="storage/profiles/user2-160x160.jpg" alt="Bussines profile picture">
		 	 
                </div>

 </div>
          </div>
            
        </div>
              
      <form class="form-horizontal" enctype="multipart/form-data"  method="post" id="addproduct" action="index.php?view=adduser" role="form">

<div class="col-md-10">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Imagen (160x160)</label>
    <div class="col-md-6">
      <input type="file" name="image" id="image" placeholder="">

    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-3">
      <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
    </div>
    
      
    <label for="inputEmail1" class="col-lg-1 control-label">Apellido*</label>
    <div class="col-md-3">
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Apellido">
    </div>
  
    
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">usuario*</label>
    <div class="col-md-3">
      <input type="text" name="username" class="form-control" required id="username" placeholder="Nombre de usuario">
    </div>
    
     
    <label for="inputEmail1" class="col-lg-1 control-label">Email*</label>
    <div class="col-md-3">
      <input type="text" name="email" class="form-control" id="email" placeholder="Email">
    </div>
  
  </div>
 

  <div class="form-group">
    
    <label for="inputEmail1" class="col-lg-2 control-label">Cedula</label>
    <div class="col-md-3">
      <input type="text" name="cedula" class="form-control" id="inputEmail1" placeholder="Cedula">
    </div>
    
     <label for="inputEmail1" class="col-lg-1 control-label">Contrase&ntilde;a</label>
    <div class="col-md-3">
      <input type="password" name="password" class="form-control" required id="inputEmail1" placeholder="Contrase&ntilde;a">
    </div>
  </div>





  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Roles</label>
    <div class="col-md-6">
    <?php 
$roles = RolData::getAll();
    ?>
    <select name="rol_id" class="form-control" required>
    <option value="">-- NINGUNO --</option>
    <?php foreach($roles as $cli):?>
      <option value="<?php echo $cli->id;?>"><?php echo $cli->name;?></option>
    <?php endforeach;?>
      </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Usuario</button>
    </div>
  </div>
</form>
	</div>
<!--            <script type="text/javascript">
        $(document).ready(function () {
            $('#addproduct').submit(function (e) {
          swal(
                 'AGREGAR USUARIOS',
                 'Usuarios GUARDADO EXITOSAMENTE',
                 'Tipo de mesaje'
                 );
          
            });
        });
    </script>-->
        </div>
   
</div>
</section>