<?php $cargo = RiesgoData::getAll();

$empleados= ClientepolizaData::getById($_GET["id"]);
?>

 <?php
    if(isset($_GET["id"])):
 $Empleados = PersonData::getById($_GET["id"]);
   ?>
<div class="content">
    <h1>Titulo Optenidos:  <?php echo $Empleados->name;?></h1>
     <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         <a data-toggle="modal" href="#myModal" class="btn btn-default"><i class="glyphicon glyphicon-plus-sign"></i>Titulo</a>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                            <li class="active">
                                <i class="fa fa-users"></i> Cliente
                            </li>
                            <li class="active">
                                <i class="fa fa-book"></i> Poliza
                            </li>
                        </ol>
                    </div>
                </div>
    
    
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Registro de la hoja de vida</h4>
        </div>
        <div class="modal-body">
         <form class="form-horizontal" method="post" action="index.php?view=clientepolise" role="form">
  
          
         <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Poliza</label>
    <div class="col-lg-10">
<select name="riesgo_id" class="form-control select2" style="width: 100%" required>
		<option selected="selected" value="">-- Cargo -- </option>
	<?php foreach($cargo as $product):?>
		<option value="<?php echo $product->id; ?>" ><?php echo $product->name; ?></option>
	<?php endforeach ; ?>
</select>
    </div>
  </div>
             
   
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="empleados_id" value="<?php echo $_GET["id"];?>">
      <button type="submit" class="btn btn-primary">Agregar Datos</button>
    </div>
  </div>
</form></div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    
    
     <?php if(count($empleados)>0): ?>
<table class="table table-bordered table-hover">
    	<thead>
               <th>Riego</th>
               <th>Polize</th>
               <th>Fecha</th>
		


	</thead>
        
        <?php foreach ($empleados as $empleo){
          $riesgo=$empleo->getpoliza();
          $polize = $riesgo->getpoliza();
          
            ?>
        
        <tr>
         <td><?php  echo $riesgo->name;  ?></td>
         <td> <?php  echo $polize->name;  ?></td>
         <td> <?php if($empleo->riesgo_id!=null){ echo $empleo->getpoliza()->created_at; } ?></td>
        
        </tr>
    

        
        <?php
	}
	?>
</table>
<?php else:?>
  <p class="alert alert-warning">No hay ingredientes</p>
<?php endif; ?>
  </div>
   
<?php endif; ?>
