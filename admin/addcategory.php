<?php include('aside.php'); ?>

<?php 
                            if(isset($_POST['submit'])){
                                $category_name = escape_string($_POST['category_name']);
                                $category_icon = escape_string($_POST['category_icon']);
                                $sql = "INSERT INTO category VALUES ('','$category_name','$category_icon')";
                                if(query($sql)){
                                    echo '
                                    <script type="text/javascript">
                                    alert("Category Added.");
                                    window.location = "category.php";
                                </script>';
                                }else{
                                    echo '
                                    <script type="text/javascript">
                                    alert("Fail to create Category .");
                                    window.location = "addcategory.php";
                                </script>';
                                }
                            }   
                        ?>
 
<div class="col-md-8">
   <div class="">
    <div class="form-container">


                <h2 class="text-center">Add Category</h2>
              <form action="#" method="POST">
                <div class="form-group">
                <label for="">Nom Category :</label>
                  <input type="text" class="form-control" name="category_name" id="recipient-name">
                </div>
                <div class="form-group">
                <label for="">Icon Fontawesome :</label>
                  <input type="text" class="form-control" name="category_icon" id="recipient-name" >
                </div>
                <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-primary">Add Category</button>
              </div>
              </form>
              </div>
            </div>
            </div>

<?php include('../inc/footer.php'); ?>