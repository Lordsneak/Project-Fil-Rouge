<?php include('inc/fonctions.php'); ?>
<?php
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
  }
?>
<?php 
                            if(isset($_POST['register'])){
                                $username = escape_string($_POST['username']);
                                $email = escape_string($_POST['email']);
                                $password = escape_string(sha1($_POST['password']));
                                $fullname = escape_string($_POST['fullname']);
                                $sql = "INSERT INTO users VALUES ('','$fullname','$username','$password','$email')";
                                if(query($sql)){
                                    echo '<div class="alert alert-success mt-2">Account Created.</div>';
                                }else{
                                    echo '<div class="alert alert-danger mt-2">Fail to create account</div>';
                                }
                            }   
                        ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Hibamall.ma - Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/login.css">
  </head>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xl-5 col-lg-6 col-sm-10 mx-auto text-center form p-4">
            <div class="d-flex justify-content-center">
                <a href=""><img class="card-1" src="asset/img/logo.png" alt="" srcset=""></a>
            </div>
          </div>
        </div>
      </div>
      <section class="container-fluid">
        <section class="row justify-content-center">
          <section class="col-md-10 col-xl-5 col-lg-6 col-sm-10 mx-auto text-center form">
            <form class="form-container" action="register.php" method="POST">
              <div class="form-group">
                <h1>Register Account</h1>
    <br>
                <input type="text" class="form-control" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Full Name">
              </div>

              <div class="form-group">
              
              <a href="recovery.php">Password Forgot ?</a>
              </div>
              <button type="submit" name="register" class="btn btn-primary btn-block">Create</button>
            </form>
          </section>
        </section>
      </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>