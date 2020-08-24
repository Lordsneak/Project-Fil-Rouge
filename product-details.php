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
                    <form action="">
                <div class="content-produit">
                <h6><?php echo $row['product_fullname'];?> </h6> 
                <label class="colors">Select Color :</label>
							<span class="color" 	style="background: <?php echo $row['color1'];?>;"></span>
							<span class="color" 	style="background: <?php echo $row['color2'];?>; "></span>
                            <span class="color"  	style="background: <?php echo $row['color3'];?>; "></span>
            <select class="form-control w-50" name="color" id="exampleFormControlSelect1">

                <option><?php echo $row['color1'];?></option>
                <option><?php echo $row['color2'];?></option>
                <option><?php echo $row['color3'];?></option>
            </select>
                <label>QTY : <input class="input-group w-50" type="number"> </label>
                <br>
                <h6 for="">Price : $ <?php echo $row['product_price'];?></h6>
                <a href=""><button class="btn btn-transparent border-dark"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp; Add to cart</button></a>
                <a href=""><button class="btn btn-primary border-dark"> <i class="fa fa-credit-card" aria-hidden="true"></i> &nbsp; Buy Now</button></a>
                <hr>
                <h6>Paymant : <i class="fa fa-paypal" aria-hidden="true"></i> &nbsp; Paypal</h6>
                <br>
                <h6>Share : <a href="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>   &nbsp; <a href="Twitter"> <i class="fa fa-twitter" aria-hidden="true"></i> &nbsp; <a href="Whatapp"><i class="fa fa-whatsapp" aria-hidden="true"></i> </a> </h6>
                <h6> Favorite : (10) <i class="fa fa-heart-o" aria-hidden="true"></i></h6>
                <H6>Description : <?php echo $row['product_description'];?> </H6>
                <p> </p>
            </div>
                    </div>
                    </form>
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