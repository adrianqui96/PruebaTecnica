<section class="content">
<?php
$data=  RolData::getAll();
?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Rol Administrativos 
                        </h1>
                    
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
                                                <th></th>
                                                <th>Nombre</th>
                                            
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data as $post):?>
                                            <tr>
<td style="width:30px;"><a href="index.php?view=productbycategory&id=<?php echo $user->id;?>" class="btn btn-default btn-xs"><i class="fa fa-th-list"></i> Usuarios</a>
                                                <td><?php echo $post->name;?></td>
                              	<td>
					<?php if($post->kind==1):?>
						<i class="glyphicon glyphicon-ok"></i>
                                                
                                        <?php else:?>
                                                
                                                <i class="glyphicon glyphicon-remove"></i>
					<?php endif; ?>
				</td>
                                                <td style="width:70px;">
                                                <a href="./?view=edituser&id=<?php$post->id;?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                                <a href="./?action=deluser&id=<?php$post->id;?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
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
