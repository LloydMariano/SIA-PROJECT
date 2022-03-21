<!doctype html>
<html lang="en">
  <head>
    
  <?php include_once 'php/nav_side_bar.php'; ?> 
   
    <title>Inventory Management System</title>

    <div class="container2">
        <nav class="navbar navbar-light"  style="background-color: #eeeded;">
            <h5 class="product">Notifications</h5>

          </nav>
        
    </div>
    <div class="container1 ">
        <nav class="navbar navbar-light bg-light d-flex justify-content-end shadow-sm p-3 mb-5 bg-body rounded">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
  
          </nav>
            
      </div>

  </head>
  <body>
  <table class="table table-hover table-sm">
            <thead>
              <tr>
                <th scope="col">Date</th>
                <th scope="col">Message</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">01/01/2001</th>
                <td>The Product Number 0001 has been out of stock</td>
                <td> 
                  <button class="btn btn-danger"> <i class='fas fa-trash'></i> </button>
              </td>
              </tr>
</body>


</html>