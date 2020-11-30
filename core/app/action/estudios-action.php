<?php
if(isset($_GET["opt"]) && $_GET["opt"]=="add"){
    $status=0; 
           if(isset($_POST["status"])){$status=1;}
        $user = new EstudioData();
	$user->name = $_POST["name"];
	 $user->status=$status;
      
	$user->add();
Core::redir("./index.php?view=estudios&opt=all");
        

	
}
else if(isset($_GET["opt"]) && $_GET["opt"]=="upd"){
	$user = EstudioData::getById($_POST["user_id"]);
	$user->name = $_POST["name"];
	 $user->status = isset($_POST["status"])?1:0;
	$user->update();
	Core::redir("./index.php?view=estudios&opt=all");

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