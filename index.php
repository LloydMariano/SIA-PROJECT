<!doctype html>
<html lang="en">
  <head>
  <?php require_once 'php/config.php' ?>

    <?php include_once 'php/nav_side_bar.php'; ?> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/inventory.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>Inventory Management System</title>


    <div class="container2">
        <nav class="navbar navbar-light"  style="background-color: #eeeded;">
            <h5 class="product">Products</h5>

          </nav>
        
    </div>
    <div class="container1 ">
        <nav class="navbar navbar-light bg-light d-flex justify-content-end shadow-sm p-3 mb-5 bg-body rounded">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="nav nav-pills mb-3 justify-content-end" id="pills-tab">
                <li class="nav-add">
                  <a class="nav-link bg-primary text-white" href="add_prod.php">ADD</a>
                </li>
              </ul>
          </nav>
            
      </div>
  </head>
  <body>
 
          <table class="table table-hover table-sm">
            <thead>
              <tr>
                <th scope="col">Product Number</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Quantity</th>
                <th scope="col">Product Brand</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

<?php 
$sql = "SELECT * from  product_tbl ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{

?>

            <tbody>
              <tr>
                <td scope="row"><?php echo htmlentities($result->prod_num); ?></td>
                <td><?php echo htmlentities($result->prod_name); ?></td>
                <td><?php echo htmlentities($result->prod_qty); ?></td>
                <td><?php echo htmlentities($result->prod_brand); ?></td>
                <td><?php echo htmlentities($result->prod_categ); ?></td>
                <td> 
                <a class="up_btn" href="php/update_prod.php?id=<?php echo htmlentities($result->prod_id); ?>"> <button class="btn btn-success" >  <i class='fas fa-edit'></i> </button> </a>
                <a class="dwn_btn"href="php/delcon_prod.php?id=<?php echo htmlentities($result->prod_id); ?>"> <button class="btn btn-danger"> <i class='fas fa-trash'></i> </button>  </a>
              </td>
              </tr>

              
            </tbody>
            <?php $cnt=$cnt+1; }} ?>
          </table>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3b0808b55a.js" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>


</html>