<?php include('aside.php'); ?>
<?php
					$id = escape_string($_GET['id']);
                    $query = "SELECT * FROM products WHERE id = '$id'";
                    $result = query($query);
                    $row = fetch_array($result);
                	?>

<div class="col-md-8">
    <div class="">
        <div class="form-container">

            <h2 class="text-center">Edit Produit</h2>

            <form action="#" method="POST">
                <input type="hidden" name="id" />
                
                <div class="form-group">
                    <label for="">Nom Produit :</label>
                    <input type="text" class="form-control" name="product_name" id="recipient-name" value="<?php echo $row['product_name'];?>">
                </div>
                <div class="form-group">
                    <label for="">Full Nom Produit :</label>
                    <input type="text" class="form-control" name="product_fullname" id="recipient-name" value="<?php echo $row['product_fullname'];?>">
                </div>
                <label for=""> Link Image :</label>
                <input type="text" class="form-control" name="product_image" id="recipient-name" value="<?php echo $row['product_image'];?>">
        </div>
        <div class="form-group">
            <label for="">Description :</label>
            <textarea type="text" class="form-control" name="product_description" id="recipient-name"><?php echo $row['product_description'];?></textarea>
        </div>
        <div class="form-group">
            <label for="">Price :</label>
            <input type="text" class="form-control" name="product_price" id="recipient-name" value="<?php echo $row['product_price'];?>">
        </div>
        <div class="form-group">
            <label for="">Old Price :</label>
            <input type="text" class="form-control" name="product_oldprice" id="recipient-name" value="<?php echo $row['product_oldprice'];?>">
        </div>
        <div class="form-group">
            <label for="">Small Image 1 :</label>
            <input type="text" class="form-control" name="product_smallimage1" id="recipient-name" value="<?php echo $row['product_smallimage1'];?>">
        </div>
        <div class="form-group">
            <label for="">Small Image 2 :</label>
            <input type="text" class="form-control" name="product_smallimage2" id="recipient-name" value="<?php echo $row['product_smallimage2'];?>">
</div>
<div class=" form-group">
            <label for="">Small Image 3 :</label>
            <input type="text" class="form-control" name="product_smallimage3" id="recipient-name" value="<?php echo $row['product_smallimage3'];?>">
</div>
<div class=" form-group">
            <label for="">Small Image 4 :</label>
            <input type="text" class="form-control" name="product_smallimage4" id="recipient-name" value="<?php echo $row['product_smallimage4'];?>">
</div>
<div class="form-group">
            <label for="">Color 1</label>
                <input type="text" class="input-group" name="color1" value="<?php echo $row['color1'];?>">
        </div>
        <div class="form-group">
            <label for="">Color 2</label>
            <input type="text" class="input-group" name="color2" value="<?php echo $row['color2'];?>">

        </div>
        <div class="form-group">
            <label for="">Color 3</label>
            <input type="text" class="input-group" name="color3" value="<?php echo $row['color3'];?>">
            
        </div>
        <div class="form-group">
            <label for="">Promo</label>
            <input type="text" class="input-group" name="promo" value="<?php echo $row['promo'];?>">
            
        </div>
            <div class=" form-group">
            <label for="">Category : <?php echo $row['category_id'];?></label>
            <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                <?php 
                $query = "SELECT * FROM category";
                $result = query($query);
                while($row = fetch_array($result)):
            ?>
                <option><?php echo $row['id'];?></option>
                <?php 
                endwhile;
            ?>
            </select>
        </div>
        <div class=" modal-footer">
            <button type="submit" name="submit" class="btn btn-primary">Edit Produit</button>
        </div>
        </form>
    </div>
</div>
<?php
      if(isset($_POST['submit'])){
        $product_name = $_POST['product_name'];
        $product_fullname = $_POST['product_fullname'];
        $product_image = $_POST['product_image'];
        $product_description = $_POST['product_description'];
        $product_price = $_POST['product_price'];
        $product_oldprice = $_POST['product_oldprice'];
        $color1 = ($_POST['color1']);
        $color2 = ($_POST['color2']);
        $color3 = ($_POST['color3']);
        $product_smallimage1 = $_POST['product_smallimage1'];
        $product_smallimage2 = $_POST['product_smallimage2'];
        $product_smallimage3 = $_POST['product_smallimage3'];
        $product_smallimage4 = $_POST['product_smallimage4'];
        $category_id = escape_string($_POST['category_id']);
        $promo = escape_string($_POST['promo']);
        $query = "UPDATE products SET product_name = '$product_name','$product_fullname', product_image='$product_image', product_description ='$product_description', product_price='$product_price', product_oldprice='$product_oldprice', product_smallimage1='$product_smallimage1', product_smallimage2='$product_smallimage2', product_smallimage3='$product_smallimage3', product_smallimage4='$product_smallimage4', color1='$color1', color2='$color2', color3='$color3', category_id='$category_id',promo='$promo' WHERE id = '$id'";
                    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                    ?>
            <script type="text/javascript">
                alert("Update Successfull.");
                window.location = "produit.php";
            </script>
            <?php
             }               
?>
<?php include('../inc/footer.php'); ?>