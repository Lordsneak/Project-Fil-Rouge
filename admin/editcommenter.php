
<?php include('aside.php'); ?>
<?php
					$id = escape_string($_GET['id']);
                    $query = "SELECT * FROM commenter WHERE id = '$id'";
                    $result = query($query);
                    $row = fetch_array($result);
                	?>
 
 <div class="col-md-8">
   <div class="">
    <div class="form-container">

    <?php
      if(isset($_POST['submit'])){
        $commonter_name = escape_string($_POST['commonter_name']);
        $email = escape_string($_POST['email']);
        $commonter_subject = escape_string($_POST['commonter_subject']);
        $query = "UPDATE commenter SET commonter_name='$commonter_name', email='$email', commonter_subject='$commonter_subject' WHERE id='$id'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                    ?>
                     <script>
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Commenter Modifier !',
                                        showConfirmButton: false,
                                        timer: 2000
                                      }).then(function() {
                                        window.location = 'commenter.php';
                                    });
                                    </script>
        <?php
             }               
?> 
                <h2 class="text-center">Edit Commenter</h2>
              <form action="#" method="POST">
                <input type="hidden" name="id" />
                <div class="form-group">
                <label for="">Name :</label>
                  <input type="text" class="form-control" name="commonter_name" id="recipient-name" value="<?php echo $row['commonter_name'];?>">
                </div>
                <div class="form-group">
                <label for="">Email:</label>
                  <input type="text" class="form-control" name="email" id="recipient-name" value="<?php echo $row['email'];?>">
                </div>
                <div class="form-group">
                <label for="">Subject :</label>
                  <textarea type="text" class="form-control" name="commonter_subject" id="recipient-name" ><?php echo $row['commonter_subject'];?> </textarea>
                </div>
                <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-primary">Edit Commenter</button>
              </div>
              </form>
              </div>
            </div>
            </div>
            
            <?php include('../inc/footer.php'); ?>