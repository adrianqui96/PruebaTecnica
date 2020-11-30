<section class="content">
<div class="row">
	<div class="col-md-12">
		<h1>Tipos De Cubrimientos De La Poliza</h1>
    

<!-- Button trigger modal -->
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
Nueva
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">

      
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tipos de Cubrimientos</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" method="post" id="addcategory" action="index.php?action=cubrimientosp&opt=add" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">porcentajes*</label>
    <div class="col-md-6">
      <input type="text" name="porcen" required class="form-control" id="sueldo" placeholder="porcentajes">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Presio*</label>
    <div class="col-md-6">
      <input type="text" name="price" required class="form-control" id="price" placeholder="presio">
    </div>
  </div>
              
   


  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
  </div>
                    
                            
    
</form>

      </div>

    </div>
  </div>
</div>


<br>
<br>
		<?php

		$users = PolizaData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>
<div class="box box-primary">
<div class="box-body">
    <table class="table table-bordered table-hover datatable">
			<thead>
                  
			<th>Cubrimientos</th>
			<th>Porcentajes</th>
			<th>price</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
                        <tr id="mensaje">
				<td><?php echo $user->name; ?></td>
                                <td><?php echo $user->porcen; ?>%</td>
                                <td><?php echo $user->price; ?></td>
				 
				<td style="width:130px;">

<button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#editModal<?php echo $user->id; ?>">
Editar
</button>
<a href="index.php?action=categories&opt=del&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
				</tr>
				<?php

			}

				?>
				</table>
<?php foreach($users as $user):?>
<!-- Modal -->
   
    
    
                            
<div class="modal fade" id="editModal<?php echo $user->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Categria</h4>
      </div>
      <div class="modal-body">
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?action=cubrimientosp&opt=upd" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">cargo*</label>
    <div class="col-md-6">
      <input type="text" name="name" value="<?php echo $user->name;?>" class="form-control" id="name" placeholder="Categoria">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Prcentaje*</label>
    <div class="col-md-6">
      <input type="text" name="porcen" value="<?php echo $user->porcen;?>" class="form-control" id="name" placeholder="Porcentajes">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Presio*</label>
    <div class="col-md-6">
      <input type="text" name="price" value="<?php echo $user->price;?>" class="form-control" id="name" placeholder="presio">
    </div>
  </div>
                    
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </div>
  </div>
</form>

      </div>

    </div>
  </div>
</div>
<?php endforeach; ?>
				</div>
				</div>
				<?php


		}else{
			echo "<p class='alert alert-danger'>No hay Categorias</p>";
		}


		?>


	</div>
</div>

</section>