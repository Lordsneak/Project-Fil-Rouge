<?php include('inc/header.php'); ?>

<div class="container">
<div class="row">
<div class="col-md-3">
<?php include('inc/category.php'); ?>
</div>
<div class="col-md-9">
<?php include('inc/promo.php'); ?>
</div>
</div>
</div>



        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="promotion border">
                        <h5> <img src="asset/img/icons8-shopping-cart-promotion-64.png" > Promotion Products <a href="promotion.php">View More</a></h5>
                    </section>
                </div>
                <div class="col-md-12">
        <div class="row product-3 mx-auto">
        <?php 
                                $query = "SELECT * FROM products WHERE promo='1'";
                                $result = query($query);
                                while($row = fetch_array($result)):
                            ?>
                      <div class="col-md-3 col-dm-6 my-3 my-md-0 p-2">      
            
                      <form action="" method="post">
                        <div class="card shadow text-center">
                          <div>
                            <img src="<?php echo $row['product_image'];?>" class="product-img img-fluid card-img-top" alt="" srcset="">
                          </div>
                          <div class="card-body h-100">
                            <h6 class="card-title"><?php echo $row['product_name'];?></h6>
                            <div class="star">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                              </div>
                            <br>       
                            <small><s class="text-danger">Old price:$<?php echo $row['product_oldprice'];?></s></small>
                            <br>                      
                              <span class="price">Price: $ <?php echo $row['product_price'];?></span>
                              <br>
                              <hr>
                              <div class="addtocart-b">
                                <button class="btn btn-primary-outline"> <a href="product-details.php?id=<?php echo $row['id'];?>">BUY NOW !</a> </button>
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              </div>
              
                          </div>
                        </div>
              
                      </form>
                  </div>
                  <?php 
                                endwhile;
                            ?>
                  </div> 
                  </div>
              </div>

                <!-- start .. -->
                <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <section class="promotion border">
                              <h5> <img src="asset/img/icons8-shopping-cart-promotion-64.png" > Products <a href="products.php">View More</a></h5>
                          </section>
                      </div>
                     
                   <!-- Cart -->
                   <div class="col-md-12">
        <div class="row product-3 mx-auto">
        <?php 
                                $query = "SELECT * FROM products";
                                $result = query($query);
                                while($row = fetch_array($result)):
                            ?>
                      <div class="col-md-3 col-dm-6 my-3 my-md-0 p-2">      
            
                      <form action="" method="post">
                        <div class="card shadow text-center">
                          <div>
                            <img src="<?php echo $row['product_image'];?>" class="product-img img-fluid card-img-top" alt="" srcset="">
                          </div>
                          <div class="card-body h-100">
                            <h6 class="card-title"><?php echo $row['product_name'];?></h6>
                            <div class="star">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star-o" aria-hidden="true"></i>
                              </div>
                            <br>                              
                              <span class="price">Price: $ <?php echo $row['product_price'];?></span>
                              <br>
                              <hr>
                              <div class="addtocart-b">
                                <button class="btn btn-primary-outline"> <a href="product-details.php?id=<?php echo $row['id'];?>">BUY NOW ! </a> </button>
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              </div>
              
                          </div>
                        </div>
              
                      </form>
                  </div>
                  <?php 
                                endwhile;
                            ?>
                  </div> 
      </div>
    </div>
    <?php include('inc/footer.php'); ?>