<?php $p= PolizaData::getAll()?>

<section class="content">
<div class="row">
	<div class="col-md-12">
		<h1>Tipos De Riesgo</h1>
    

<!-- Button trigger modal -->
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
Nueva Riesgo
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">

      
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal" method="post" id="addcategory" action="index.php?action=riesgo&opt=add" role="form">

  <div class="form-group">
      <label for="name1" class="col-lg-2 control-label">poliza</label>
      <div class="col-md-6">
    <select class="form-control" name="poliza_id" required>
      <option value="">-- SELECCIONE --</option>
<?php foreach($p as $c):?>
      <option value="<?php echo $c->id; ?>"><?php echo $c->name; ?></option>
<?php endforeach; ?>
    </select>
      </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
              
                     <label for="inputEmail1" class="col-lg-2 control-label">Activo</label>
    <div class="col-md-1">
<div class="checkbox">
    <label>
      <input type="checkbox" name="status"> 
    </label>
  </div>
    </div>


  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Categria</button>
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

		$users = RiesgoData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>
<div class="box box-primary">
<div class="box-body">
    <table class="table table-bordered table-hover datatable">
			<thead>
                 
			<th>Riesgos</th>
			<th>Poliza</th>
			<th>Stados</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
                            $poliza=$user->getpoliza();
				?>
                        <tr id="mensaje">
                                <td><?php echo $user->name; ?></td>
                                <td><?php echo $poliza->name; ?></td>
				       <td>
					<?php if($user->status):?>
						<i class="glyphicon glyphicon-ok"></i>
                                               <?php else:?>
                                                <i class="glyphicon glyphicon-remove"></i>
					<?php endif; ?>
                                                
				</td>
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
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?action=riesgo&opt=upd" role="form">

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">cargo*</label>
    <div class="col-md-6">
      <input type="text" name="name" value="<?php echo $user->name;?>" class="form-control" id="name" placeholder="Categoria">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">sueldo*</label>
    <div class="col-md-6">
      <input type="text" name="sueldo" value="<?php echo $user->sueldo;?>" class="form-control" id="name" placeholder="Categoria">
    </div>
  </div>
                    
   <label for="inputEmail1" class="col-lg-2 control-label" >Activo</label>
    <div class="col-md-2">
<div class="checkbox">
    <label>
      <input type="checkbox" name="status" <?php if($user->status){ echo "checked";}?>> 
    </label>
  </div>
  </div>


  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Categria</button>
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