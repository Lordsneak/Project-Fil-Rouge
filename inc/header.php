<?php include('inc/fonctions.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hibamall Online Shoping</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="asset/css/product.css">
    <link rel="stylesheet" href="asset/css/product-details.css">
    <link rel="stylesheet" href="asset/css/cart.css">


</head>

<body>
    <header id="header">
        <!-- Full Header -->
        <div class="header_top">
            <!-- Header top Track Order et center Help -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="track-order pull-right">
                            <ul>
                                <a href="https://www.17track.net/">Track Order</a>
                                <a href="contact.php">Help Center</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-dm-6 my-3 my-md-0" >
                <a href="/hibamall"> <img class="mylogo" src="asset/img/logo.png" alt="Hibamall"></a>
                    <!-- Header with Logo -->
                </div>
                <div class="col-md-6">
                    <!-- Search Bar -->
                    <div class="search-bar">
                    <form action="search.php" method="POST">
                        <input class="form-control active-cyan-4 mb-4" name="search" type="text" placeholder="I'm Looking for ..."
                            aria-label="Search">
                        </form>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Cart Shoping Here with user Account -->
                    <div class="ca-bar">
                        <!-- ca Cart Account -->
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i> Cart </a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="cart.php"> <?php echo !empty($_SESSION['count']) ? $_SESSION['count'] : 0?> produit(s)</a>
                        </div>
                        <?php
          if(!isset($_SESSION["username"])){
            echo ' <a href="login.php"> <i class="fa fa-user" aria-hidden="true"></i> Sign in </a>';
          }else {
            echo '
        
      <div class="btn-group">
  <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fa fa-user" aria-hidden="true"></i> Profile
  </a>
  <div class="dropdown-menu">
    <a href="/hibamall/admin/"> <i class="fa fa-user" aria-hidden="true"></i>
    Dashboard</a>
    <br>
  <a href="logout.php"> <i class="fa fa-sign-out" aria-hidden="true"></i>
    Sign Out </a>
</div>

        ';
          }
        ?>



                    </div>
                </div>
            </div>
        </div>
    </header>

   