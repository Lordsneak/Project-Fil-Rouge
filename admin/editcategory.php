
<?php include('aside.php'); ?>
<?php
					$id = escape_string($_GET['id']);
                    $query = "SELECT * FROM category WHERE id = '$id'";
                    $result = query($query);
                    $row = fetch_array($result);
                	?>
 
 <div class="col-md-8">
   <div class="">
    <div class="form-container">

    <?php
      if(isset($_POST['submit'])){
        $category_name = $_POST['category_name'];
        $category_icon = $_POST['category_icon'];
        $query = "UPDATE category SET category_name = '$category_name', category_icon='$category_icon' WHERE id = '$id'";
                    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "category.php";
        </script>
        <?php
             }               
?> 
                <h2 class="text-center">Edit Category</h2>
              <form action="#" method="POST">
                <input type="hidden" name="id" />
                <div class="form-group">
                <label for="">Nom Category :</label>
                  <input type="text" class="form-control" name="category_name" id="recipient-name" value="<?php echo $row['category_name'];?>">
                </div>
                <div class="form-group">
                <label for="">Icon :</label>
                  <input type="text" class="form-control" name="category_icon" id="recipient-name" value="<?php echo $row['category_icon'];?>">
                </div>
                <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-primary">Edit Category</button>
              </div>
              </form>
              </div>
            </div>
            </div>
 
            <?php include('../inc/footer.php'); ?>