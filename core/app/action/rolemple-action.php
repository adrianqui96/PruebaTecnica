<?php
if(isset($_GET["opt"]) && $_GET["opt"]=="add"){
      $kind=0; 
           if(isset($_POST["kind"])){$kind=1;}
        $user = new RolData();
	$user->name = $_POST["name"];
	 $user->kind=$kind;
       $user->tipos = $_POST["tipos"]=2;
	$user->add();
Core::redir("./index.php?view=rolEmpl&opt=all");
        

	
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="upd"){
	$user = RolData::getById($_POST["user_id"]);
	$user->name = $_POST["name"];
	$user->tipos = $_POST["tipos"]=2;
         $user->kind = isset($_POST["kind"])?1:0;
	$user->update();
	Core::redir("./index.php?view=rolEmpl&opt=all");

}
else if(isset($_GET["opt"]) && $_GET["opt"]=="del"){
$category = CategoryData::getById($_GET["id"]);

$products = ProductData::getAllByCategoryId($category->id);
foreach ($products as $product) {
	$product->del_category();
}

$category->del();
Core::redir("./index.php?view=categories&opt=all");
}


?>