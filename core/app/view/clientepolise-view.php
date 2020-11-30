<?php

// print_r($_POST);
$operation = new EmplehojaData();
$operation->riesgo_id = $_POST["riesgo_id"];
$operation->add();

header("Location: index.php?view=clientepoliza&id=$_POST[empleados_id]");


?>
