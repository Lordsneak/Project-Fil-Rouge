<?php include('aside.php'); ?>

<?php 
                            if(isset($_POST['submit'])){
                                $product_name = escape_string($_POST['product_name']);
                                $product_fullname = escape_string($_POST['product_fullname']);
                                $product_image = escape_string($_POST['product_image']);
                                $product_description = escape_string($_POST['product_description']);
                                $product_price = escape_string($_POST['product_price']);
                                $product_oldprice = escape_string($_POST['product_oldprice']);
                                $product_quantity = escape_string($_POST['product_quantity']);
                                $color1 = escape_string($_POST['color1']);
                                $color2 = escape_string($_POST['color2']);
                                $color3 = escape_string($_POST['color3']);
                                $product_smallimage1 = escape_string($_POST['product_smallimage1']);
                                $product_smallimage2 = escape_string($_POST['product_smallimage2']);
                                $product_smallimage3 = escape_string($_POST['product_smallimage3']);
                                $product_smallimage4 = escape_string($_POST['product_smallimage4']);
                                $category_id = escape_string($_POST['category_id']);
                                $promo = escape_string($_POST['promo']);
                                $sql = "INSERT INTO products VALUES ('','$product_name','$product_fullname','$product_image','$product_description','$product_price','$product_oldprice','$product_quantity','$color1','$color2','$color3','$product_smallimage1','$product_smallimage2','$product_smallimage3','$product_smallimage4','$category_id','$promo')";
                                if(query($sql)){
                                    echo  "
                                    <script>
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Produit Ajouté',
                                        showConfirmButton: false,
                                        timer: 3000
                                      }).then(function() {
                                        window.location = 'produit.php';
                                    });
                                    </script>
                                ";
                                }else{
                                    echo "<script>
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Produit Pas Ajouté ',
                                        showConfirmButton: false,
                                        timer: 3000
                                      })
                                    window.location = 'addproduit.php';
                                </script>";
                                }
                            }   
                        ?>

<div class="col-md-8">
    <div class="">
        <div class="form-container">


            <h2 class="text-center">Add Produit</h2>
            <form action="#" method="POST">

                <div class="form-group">
                    <label for="">Name Produit :</label>
                    <input type="text" class="form-control" name="product_name" id="recipient-name">
                </div>
                <div class="form-group">
                    <label for="">Full Name Produit :</label>
                    <input type="text" class="form-control" name="product_fullname" id="recipient-name">
                </div>
                <label for="">Link Image :</label>
                <input type="text" class="form-control" name="product_image" id="recipient-name">
        </div>
        <div class="form-group">
            <label for="">Description :</label>
            <textarea type="text" class="form-control" name="product_description" id="recipient-name"></textarea>
        </div>
        <div class="form-group">
            <label for="">Price :</label>
            <input type="text" class="form-control" name="product_price" id="recipient-name">
        </div>
        <div class="form-group">
            <label for="">Old Price :</label>
            <input type="text" class="form-control" name="product_oldprice" id="recipient-name">
        </div>
        <div class="form-group">
            <label for="">QTY :</label>
            <input type="number" class="form-control" name="product_quantity" id="recipient-name">
        </div>
        <div class="form-group">
            <label for="">Color 1</label>
            <select class="form-control" name="color1" id="exampleFormControlSelect1">
            <?php 
                                $query = "SELECT * FROM colors";
                                $result = query($query);
                                while($row = fetch_array($result)):
                            ?>
                <option><?php echo $row['color_code'];?></option>
                <?php 
                                endwhile;
                            ?>
            </select>

        </div>
        <div class="form-group">
            <label for="">Color 2</label>
            <select class="form-control" name="color2" id="exampleFormControlSelect1">
            <?php 
                                $query = "SELECT * FROM colors";
                                $result = query($query);
                                while($row = fetch_array($result)):
                            ?>
                <option><?php echo $row['color_code'];?></option>
                <?php 
                                endwhile;
                            ?>
            </select>

        </div>
        <div class="form-group">
            <label for="">Color 3</label>
            <select class="form-control" name="color3" id="exampleFormControlSelect1">
            <?php 
                                $query = "SELECT * FROM colors";
                                $result = query($query);
                                while($row = fetch_array($result)):
                            ?>
                <option><?php echo $row['color_code'];?></option>
                <?php 
                                endwhile;
                            ?>
            </select>

        </div>
        <div class="form-group">
            <label for="">Small Image 1 :</label>
            <input type="text" class="form-control" name="product_smallimage1" id="recipient-name">
        </div>
        <div class="form-group">
            <label for="">Small Image 2 :</label>
            <input type="text" class="form-control" name="product_smallimage2" id="recipient-name"">
                </div>
                <div class=" form-group">
            <label for="">Small Image 3 :</label>
            <input type="text" class="form-control" name="product_smallimage3" id="recipient-name"">
                </div>
                <div class=" form-group">
            <label for="">Small Image 4 :</label>
            <input type="text" class="form-control" name="product_smallimage4" id="recipient-name"">
                </div>
                <div class="form-group">
            <label for="">Category :             
            <?php 
                                $query = "SELECT * FROM category";
                                $result = query($query);
                                while($row = fetch_array($result)):
                            ?>
            <?php echo $row['category_name'];?> ID : <?php echo $row['id'];?>
            <?php 
                                endwhile;
                            ?> </label>
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
        <div class="form-group">
            <label for="">Promo : 0 = False 1 = True</label>
            <select class="form-control" name="promo" id="exampleFormControlSelect1">
            <option>0</option>
            <option>1</option>
            </select>

        </div>
                <div class=" modal-footer">
            <button type="submit" name="submit" class="btn btn-primary">Add Produit</button>
        </div>
        </form>
    </div>
</div>
</div>

<?php include('../inc/footer.php'); ?>