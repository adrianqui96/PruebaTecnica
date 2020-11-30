<section class="content">
<?php
$data=  PersonData::getAll();
?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Empleados   <a href="./?view=newclientes" class="btn btn-default">Agregar</a>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                            <li class="active">
                                <i class="fa fa-users"></i> Usuarios
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                   
                        <div class="box box-primary">
                            <div class="box-body">
                                <?php if(count($data)>0){ ?>
                                    <table class="table datatable table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Registro Del Empleados</th>
                                                <th>Perfil</th>
                                                <th>Cedula</th>
                                                <th>Nombre</th>
                                                <th>Telefono</th>
                                                <th>Email</th>
                                            
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data as $post):?>
                                            <tr>
<td style="width:186px;">
    <a href="./?view=clientepoliza&id=<?php echo $post->id;?>" class="btn btn-default btn-xs"><i class="fa fa-file-pdf-o"></i> Poliza</a>
</td>

<td>
			<?php if($post->image!=""):?>
				<img src="storage/profiles/<?php echo $post->image;?>" style="width:64px;">
			<?php endif;?>
		</td>
                                                <td><?php echo $post->cedula;?></td>
                                                <td><?php echo $post->name;?></td>
                                                <td><?php echo $post->phone;?></td>
                                                <td><?php echo $post->email;?></td>
                                     
                                               
                                      <td style="width:150px;">
                                                <a href="./?view=editclientes&id=<?php echo $post->id;?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                                <a href="./?action=deluser&id=<?php echo $post->id;?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                </section>
		<?php


		}else{
			echo "<p class='alert alert-danger'>No hay Empleado</p>";
		}


		?>