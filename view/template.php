<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="../../image/logo.png" rel="shortcut icon" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <title>Home Page</title>
</head>

<body>
 <a href="template.php"> <img src="../../image/logo.png" id="logo" width="200" alt=""></a>
  <nav class="navbar  bg-info navbar-dark">
    <ul class="nav">
      <li class="nav-item">
        <a class="navbar-brand container" href="index.php">Home Page</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand float-right" href="index1.php">User</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="#">Contect Us</a>
      </li>
    </ul>

    <div class="nav justify-content-center right">
      <a class="navbar-brand mr-4" href="../../index.php"><b>Sign Out</b></a>
    </div>
  </nav>

    <?php
     include "view/".$data['page'].".php";
    ?>
  <footer class="jumbotron bg-info">
    <div class="row">
      <div class="col-3">
        <a href="template.php"><img src="../../image/logo.png" class="img-fluid" width="150" alt=""></a>
      </div>
      <div class="col-3">
        <h6><b>Our Action:</b></h6>
        <p>- Cambodia</p>
      </div>
      <div class="col-3">
        <h6><b>About Us:</b></h6>
        <p>Help people for easy borrow book from libary</p>
      </div>
      <div class="col-3">
        <h6><b>Contect with us:</b></h6>
        <a href=""><img src="../../image/skype.png" class="img-fluid" width="20" alt=""></a>
        <a href=""><img src="../../image/facebook.png" class="img-fluid" width="30" alt=""></a>
        <a href=""><img src="../../image/youtube.png" class="img-fluid" width="30" alt=""></a>
      </div>
    </div>
  </footer>
</body>

</html>