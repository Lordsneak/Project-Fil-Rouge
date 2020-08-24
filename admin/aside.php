
<?php include('top.php'); ?>
<?php
  require('../inc/fonctions.php');
  if(!isset($_SESSION["username"])){
    header("Location: ../login.php");
    exit();
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Hibamall.ma - Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../asset/css/main.css">
    <link rel="stylesheet" href="../asset/css/dashboard.css">
    <link rel="stylesheet" href="../asset/css/container.css">
</head>
  <body>
      <div class="container">
        <div class="row">

        <div class="col-md-4">
      <div class="aside">
          <img src="../asset/img/logo.png" alt="">
          <h5 class="text-center">Dashboard Admin</h5>
          <div class="">
          <a href="category.php"><button type="button" class="btn btn-primary my-2 px-5 w-75"><i class="fa fa-list" aria-hidden="true"></i> &nbsp; List Category</button> </a>
          <a href="produit.php"><button type="button" class="btn btn-primary my-2 px-5 w-75"><i class="fa fa-list" aria-hidden="true"></i> &nbsp; List Produit</button></a>
          <a href="users.php"><button type="button" class="btn btn-primary my-2 px-5 w-75"><i class="fa fa-list" aria-hidden="true"></i> &nbsp; List Utilisateur</button></a>
          <a href="annance.php"><button type="button" class="btn btn-primary my-2 px-5 w-75"><i class="fa fa-list" aria-hidden="true"></i> &nbsp; List Annance</button></a>
          <a href="commenter.php"><button type="button" class="btn btn-primary my-2 px-5 w-75"><i class="fa fa-comment-o" aria-hidden="true"></i> &nbsp; Customer Preview</button></a>
          <a href="../logout.php"><button type="button" class="btn btn-success my-2 px-5 w-75"><i class="fa fa-sign-out" aria-hidden="true"></i> &nbsp; Logout</button></a>

          </div>
      </div>  

        </div>


