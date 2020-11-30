<?php if(isset($_GET["id"])):
$sell = ClientepolizaData::getById2($_GET["id"]);
?>
<section class="content">

<h1>Seguro</h1>
<p>Desttales de los seguro del clientes.</p>
<?php
if($sell==null){
	Core::redir("./?view=FuncionSeguro");
}
?>

 <form method="post" action="./?action=processdevolution">
<div class="box box-primary">
<table class="table table-bordered">
<?php if($sell->cliente_id!=""):
    $cargo = RiesgoData::getAll();
$client = $sell->getcliente();

 $riesgo=$sell->getpoliza();
 $polize = $riesgo->getpoliza();
?>
    
   
        
        <tr>
	<td style="width:150px;">Cliente</td>
	<td><?php echo $client->name." ".$client->lastname;?></td>
</tr>

<tr>
<td style="width:150px;">Poliza</td>
 <td><?php echo $polize->name?> ->limitante (<?php echo $polize->porcen?>)%</td>
            
</tr>
<tr>
<td style="width:150px;">Riesgo</td>
    <td><?php echo $riesgo->name; ?> 
 <input type="number" name="op_<?php echo $polize->id?>" value="" placeholder="limitante del porcenje <?php echo $polize->porcen;?> " class="form-control" min="1" max="<?php echo $polize->porcen;?>">
	</td>        
</tr>
     
        
    




<?php endif; ?>
<?php if($sell->user_id!=""):
$user = $sell->getUser();
?>
<tr>
	<td>Atendido por</td>
	<td><?php echo $user->name." ".$user->lastname;?></td>
</tr>
<?php endif; ?>
</table>
</div>
     
        <div class="box-body">
<br><input type="submit" value="Realizar" class="btn btn-primary">
<a href="./?view=dev" class="btn btn-danger" >Cancelar</a>
</div>
     </form>
<br>
             
</section>
<?php else:?>
	501 Internal Error
<?php endif; ?>
