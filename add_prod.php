<!doctype html>
<html lang="en">
  <head>
  
  <?php include_once 'php/nav_side_bar.php'; ?> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/inventory.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>Inventory Management System</title>

    <div class="container2">
        <nav class="navbar navbar-light"  style="background-color: #eeeded;">
            <h5 class="product">Adding Products</h5>

          </nav>
            
      </div>    
        
    </div>
  </head>
  <body>

          <form action="php/prod_add.php" method = "POST" class="boxform" >

          <table class="table2">
            <tr>
                    <td><span> Product Number : </span></td>
                    <td> <input type="number" name="prod_num" require=""> </td>
            </tr>
            <tr>
                    <td><span> Product Name : </span></td>
                    <td> <input type="text" name="prod_name"> </td>
            </tr>
            <tr>
                    <td><span> Product Quantity : </span></td>
                    <td> <input type="number" name="prod_qty" require="" > </td>
            </tr>
            <tr>
                    <td><span> Product Brand : </span></td>
                    <td> <input type="text" name="prod_brand" require="" > </td>
            </tr>
            <tr>
                    <td><span> Category : </span></td>
                    <td> <input type="text"  name="category" require=""> </td>
            </tr>
          </table>

          <div class="containter-fluid col-md-12">
              <button type="button" class="btn btn-danger" onclick="goBack()">Cancel</button> <br> <br>
              <script>
                  function goBack() {
                  window.history.back();
              }
              </script>
               <input type="submit" class="btn btn-success btn-noA" name="add" value="Save"></input>
              </div>
    
                </form>
            

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3b0808b55a.js" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>


</html>