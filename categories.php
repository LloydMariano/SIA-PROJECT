<!doctype html>
<html lang="en">
  <head>
    
  <?php include_once 'php/nav_side_bar.php'; ?> 
   
    <title>Inventory Management System</title>

    <div class="container2">
        <nav class="navbar navbar-light"  style="background-color: #eeeded;">
            <h5 class="product">Categories</h5>

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
                <th scope="col">Product Category</th>
                <th scope="col">Available Items</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Food</th>
                <td>5</td>
                <td> 
                  <button class="btn btn-success"> <i class='fas fa-edit'></i> </button> 
                  <button class="btn btn-danger"> <i class='fas fa-trash'></i> </button>
              </td>
              </tr>

</body>


</html>