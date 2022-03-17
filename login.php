<!DOCTYPE html>
<html>
    <head>
        <title>Login </title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="#"><img src="image/logo_amk.png" style="width: 80px;"></a>
          </nav>
        <div class="container justify-content-center" style="width: 1300px">
            <img class="img-pos" src="image/online.gif">
            <h4>INVENTORY MANAGEMENT SYSTEM</h4>
            <form action="login.php" method="post">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input class="form-control" id="username" required aria-describedby="username" placeholder="Enter Username" name="username">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" required placeholder="Password" name="password">
                </div>
                <br>
                <button type="submit" class="btn">Login</button>
              </form>
        </div>
    </body>

</html>