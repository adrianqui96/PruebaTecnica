<section class="content">
<?php
$data=UserData::getAll();
?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Usuarios   <a href="./?view=newuser" class="btn btn-default">Agregar</a>
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
                                    <table class="table datatable table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Cedula</th>
                                                <th>Nombre</th>
                                                <th>usuario</th>
                                                <th>Email</th>
                                                <th>Rol</th>
                                                <th>Departamento</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data as $post):?>
                                            <tr>
                                                <td><?php echo $post->cedula;?></td>
                                                <td><?php echo $post->name;?></td>
                                                <td><?php echo $post->username;?></td>
                                                <td><?php echo $post->email;?></td>
                                      <td><?php if($post->rol_id!=null){ echo $post->rol()->name; } ?></td>
                                    
                                                <td style="width:70px;">
                                                <a href="./?view=edituser&id=<?php echo $post->id;?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
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