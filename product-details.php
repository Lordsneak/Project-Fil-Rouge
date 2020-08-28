<?php include('inc/header.php'); ?>
<?php
					$id = escape_string($_GET['id']);
                    $query = "SELECT * FROM products WHERE id = '$id'";
                    $result = query($query);
                    $row = fetch_array($result);
                    ?>
                    <div class="menubarcategory text-left">
        <p class="category-top">
        <a href="/">Home</a>
        </p>
        <p>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        </p>
        <p class="category-top">
        <a href=""><?php echo $row['product_name'];?></a>
        </p>
</div>

<div class="container">
    <div class="row">
        <div class="product-details">
        <h6>Product: <?php echo $row['product_name'];?> </h6>
            <hr>
            <br>
            <div class="col-md-4">
            <div class="imgproduct pull-left"> <img src="<?php echo $row['product_image'];?>" alt=""> </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                <div class="content-produit">
                <form action="checkout.php" method="post">
                <h6><?php echo $row['product_fullname'];?> </h6> 
                <label class="colors">Color Disponible :</label>
							<span class="color" 	style="background: <?php echo $row['color1'];?>;"></span>
							<span class="color" 	style="background: <?php echo $row['color2'];?>; "></span>
                            <span class="color"  	style="background: <?php echo $row['color3'];?>; "></span>
                    <br>
                <h3 for="">Price : $ <?php echo $row['product_price'];?></h3>
                <br>
                
                    <div class="form-group">
                        <label for="qte">QTY :</label>
                        <input type="number" name="qte"  class="form-control w-75" min="1" max="5" value="1">
                        <input type="hidden" name="product" value="<?php echo $row['product_title'];?>">
                        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                    </div>
                    <button type="submit" class="btn btn-transparent border-dark"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp; Add to cart</button>
                </form>

                <hr>
                <h6>Paymant : <i class="fa fa-paypal" aria-hidden="true"></i> &nbsp; Paypal</h6>
                <br>
                <h6>Share : <a href="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>   &nbsp; <a href="Twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> &nbsp; <a href="Whatapp"><i class="fa fa-whatsapp" aria-hidden="true"></i> </a> </h6>
                <h6> Favorite : (10) <i class="fa fa-heart-o" aria-hidden="true"></i></h6>
                <H6>Description : <?php echo $row['product_description'];?> </H6>
                <p> </p>
            </div>
                    </div>
                    <div class="smallimage">
                        <h6>More Images</h6>
                <a href="<?php echo $row['product_smallimage1'];?>"> <img class="border border-dark" src="<?php echo $row['product_smallimage1'];?>" alt="" srcset=""></a>
                <a href="<?php echo $row['product_smallimage2'];?>"> <img class="border border-dark" src="<?php echo $row['product_smallimage2'];?>" alt="" srcset=""></a>
                <a href="<?php echo $row['product_smallimage3'];?>"> <img class="border border-dark" src="<?php echo $row['product_smallimage3'];?>" alt="" srcset=""></a>
                <a href="<?php echo $row['product_smallimage4'];?>"> <img class="border border-dark" src="<?php echo $row['product_smallimage4'];?>" alt="" srcset=""></a>
            </div>
                </div>
                </div>

            </div>
    </div>
</div>







<?php include('inc/footer.php'); ?>