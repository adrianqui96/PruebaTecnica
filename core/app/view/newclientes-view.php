
  
<section class="content">
<div class="row">
     
	<div class="col-md-12">
	<h1>Agregar Clientes</h1>
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
              
      <form class="form-horizontal" enctype="multipart/form-data"  method="post" id="addproduct" action="index.php?view=addempledos" role="form">

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
        <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre" >
    </div>
    
      
    <label for="inputEmail1" class="col-lg-1 control-label">Apellido*</label>
    <div class="col-md-3">
      <input type="text" name="lastname" class="form-control" id="lastname" required placeholder="Apellido">
    </div>
  
    
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">telefono*</label>
    <div class="col-md-3">
      <input type="text" name="phone" class="form-control" required required id="phone" placeholder="telefono">
    </div>
    
     
    <label for="inputEmail1" class="col-lg-1 control-label">Email*</label>
    <div class="col-md-3">
      <input type="text" name="email" required class="form-control" id="email" placeholder="Email">
    </div>
  
  </div>
 

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">direccion</label>
    <div class="col-md-3">
      <input type="text" name="address" required class="form-control" id="address" placeholder="direccion">
    </div>
    
    <label for="inputEmail1" class="col-lg-1 control-label">Cedula</label>
    <div class="col-md-3">
      <input type="text" name="cedula" required class="form-control" id="inputEmail1" placeholder="Cedula">
    </div>
  </div>
    
     

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Usuario</button>
    </div>
  </div>
</form>
	</div>
        </div>
   
</div>
</section>