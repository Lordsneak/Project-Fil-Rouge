
<?php include('aside.php'); ?>
<?php
					$id = escape_string($_GET['id']);
                    $query = "SELECT * FROM users WHERE id = '$id'";
                    $result = query($query);
                    $row = fetch_array($result);
                	?>
 
 <div class="col-md-8">
   <div class="">
    <div class="form-container">


              <h2 class="text-center">Edit User</h2>
              <form action="#" method="POST">
                <input type="hidden" name="id" />
                <div class="form-group">
                <label for="">Fullname :</label>
                  <input type="text" class="form-control" name="fullname" id="recipient-name" value="<?php echo $row['fullname'];?>">
                </div>
                <div class="form-group">
                <label for="">Password :</label>
                  <input type="password" class="form-control" name="password" id="recipient-name" value="<?php echo $row['password'];?>">
                </div>
                <div class="form-group">
                <label for="">Username :</label>
                  <input type="text" class="form-control" name="username" id="recipient-name" placeholder="value="<?php echo $row['email'];?>>
                </div>
                <div class="form-group">
                <label for="">Email :</label>
                  <input type="Email" class="form-control" name="email" id="recipient-name" value="<?php echo $row['email'];?>">
                </div>
                <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-primary">Edit User</button>
              </div>
              </form>
              </div>
            </div>
            </div>
            <?php
      if(isset($_POST['submit'])){
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
      $query = "UPDATE users SET fullname ='$fullname',
                      username ='$username', password=SHA1('{$password}'), email ='$email'
                      WHERE id = '$id'";
                    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                    ?>
                                          <script>
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'User Modifier !',
                                        showConfirmButton: false,
                                        timer: 2000
                                      }).then(function() {
                                        window.location = 'users.php';
                                    });
                                    </script>
        <?php
             }               
?>  
            <?php include('../inc/footer.php'); ?>