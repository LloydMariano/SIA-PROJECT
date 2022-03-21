<?php
require_once 'config.php';

$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
if(isset($_GET['id'])){
session_start();
$prod_id = $_SESSION['prod_id'];

    $sql = "DELETE  FROM product_tbl WHERE prod_id= ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$prod_id]);
    echo '<script type="text/javascript">';
    echo '  window.location.replace("/SIA-PROJECT/index.php")';
    echo '</script>';
}else{
    header("Location: /SIA-PROJECT/index.php"); 

  
      }