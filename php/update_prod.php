
  <?php

require_once 'config.php';

if(isset($_POST['update'])){

$prod_id = intval($_GET['id']);
$prod_num = $_POST ['prod_num'];
$prod_name = $_POST ['prod_name'];
$prod_qty = $_POST ['prod_qty'];
$prod_brand = $_POST ['prod_brand'];
$category = $_POST ['category'];

$sql = " UPDATE product_tbl SET prod_num=:prod_num, prod_name=:prod_name, prod_qty=:prod_qty, prod_brand=:prod_brand, prod_categ=:prod_categ  WHERE prod_id=:uid";
$query = $dbh->prepare($sql);

$query->bindParam('prod_num',$prod_num,PDO::PARAM_STR);
$query->bindParam('prod_name',$prod_name ,PDO::PARAM_STR);
$query->bindParam('prod_qty',$prod_qty ,PDO::PARAM_STR);
$query->bindParam('prod_brand',$prod_brand ,PDO::PARAM_STR);
$query->bindParam('prod_categ',$category ,PDO::PARAM_STR);
$query->bindParam('uid',$prod_id, PDO::PARAM_STR);

$query->execute();
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='/SIA-PROJECT/home.php'</script>";
}

?>

<!doctype html>
<html lang="en">
  <head>
  
  <?php include_once 'nav_side_bar.php'; ?> 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/SIA-PROJECT/css/inventory.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>Inventory Management System</title>

    <div class="container2">
        <nav class="navbar navbar-light"  style="background-color: #eeeded;">
            <h5 class="product">Updating Products</h5>

          </nav>
            
      </div>    
        
    </div>
  </head>
  <body>

  <?php 

  $prod_id = intval($_GET['id']);
$sql = "SELECT * from  product_tbl WHERE prod_id=:uid";
$query = $dbh->prepare($sql);
$query->bindParam('uid',$prod_id,PDO::PARAM_STR);
$query->execute();
$row=$query->fetchAll(PDO::FETCH_OBJ);


$cnt=1;
if($query->rowCount() >0)
{
    foreach($row as $result);
{
?>  

          <form name="updates" method = "POST" class="boxform" >

          <table class="table2">
            <tr>
                    <td><span> Product Number : </span></td>
                    <td> <input type="number" value="<?php echo htmlentities($result->prod_num); ?>" name="prod_num" require="" > </td>
            </tr>
            <tr>
                    <td><span> Product Name : </span></td>
                    <td> <input type="text" value="<?php echo htmlentities($result->prod_name); ?>" name="prod_name"> </td>
            </tr>
            <tr>
                    <td><span> Product Quantity : </span></td>
                    <td> <input type="number" value="<?php echo htmlentities($result->prod_qty); ?>" name="prod_qty" require="" > </td>
            </tr>
            <tr>
                    <td><span> Product Brand : </span></td>
                    <td> <input type="text" value="<?php echo htmlentities($result->prod_brand); ?>" name="prod_brand" require="" > </td>
            </tr>
            <tr>
                    <td><span> Category : </span></td>
                    <td> <input type="text"  value="<?php echo htmlentities($result->prod_categ); ?>" name="category" require=""> </td>
            </tr>
          </table>
          <?php }} ?>
          <div class="containter-fluid col-md-12">
              <button type="button" class="btn btn-danger" onclick="goBack()">Cancel</button> <br> <br>
              <script>
                  function goBack() {
                  window.history.back();
              }
              </script>
               <button type="submit" class="btn btn-success btn-noA" name="update" >Update</button>
              </div>
    
                </form>
            

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3b0808b55a.js" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>


</html>