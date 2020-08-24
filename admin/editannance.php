
<?php include('aside.php'); ?>
<?php
					$id = escape_string($_GET['id']);
                    $query = "SELECT * FROM annance WHERE id = '$id'";
                    $result = query($query);
                    $row = fetch_array($result);
                	?>
 
 <div class="col-md-8">
   <div class="">
    <div class="form-container">

    <?php
      if(isset($_POST['submit'])){
        $annance_nom = $_POST['annance_nom'];
        $annance_image = $_POST['annance_image'];
        $query = "UPDATE annance SET annance_nom = '$annance_nom', annance_image='$annance_image' WHERE id = '$id'";
                    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "annance.php";
        </script>
        <?php
             }               
?> 
                <h2 class="text-center">Edit Annance</h2>
              <form action="#" method="POST">
                <input type="hidden" name="id" />
                <div class="form-group">
                <label for="">Nom annance :</label>
                  <input type="text" class="form-control" name="annance_nom" id="recipient-name" value="<?php echo $row['annance_nom'];?>">
                </div>
                <div class="form-group">
                <label for="">Lien Image :</label>
                  <input type="text" class="form-control" name="annance_image" id="recipient-name" value="<?php echo $row['annance_image'];?>">
                </div>
                <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-primary">Edit Annance</button>
              </div>
              </form>
              </div>
            </div>
            </div>
 
            <?php include('../inc/footer.php'); ?>