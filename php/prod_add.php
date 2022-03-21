<?php

session_start();
require_once 'config.php';

$prod_num = $_POST ['prod_num'];
$prod_name = $_POST ['prod_name'];
$prod_qty = $_POST ['prod_qty'];
$prod_brand = $_POST ['prod_brand'];
$category = $_POST ['category'];
$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if(isset($_POST['add'])){
    try{

$query = "INSERT INTO product_tbl (prod_num, prod_name, prod_qty, prod_brand, prod_categ) VALUES ('$prod_num', '$prod_name', '$prod_qty', '$prod_brand', '$category' )";

$dbh->exec($query);
}catch(PDOException $e){
    echo $e->getMessage();
}
$_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
$conn = null;
header('location: /SIA-PROJECT/index.php');
}

?>

