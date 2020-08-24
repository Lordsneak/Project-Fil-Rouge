<?php include('inc/header.php'); ?>

<div class="menubarcategory text-left">
        <p class="category-top">
        <a href="">Home</a>
        </p>
        <p>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        </p>
        <p class="category-top">
        <a href="">Phones & Accessories</a>
        </p>
</div>


<div class="container">
<div class="row">

<div class="col-md-12">
        <div class="filter-product">
            <p>Price <i class="fa fa-caret-down" aria-hidden="true"></i> </p>
            <p class="pull-right">1/1</p>
        </div>
        <div class="row product-3 mx-auto">
        <?php 
                                $query = "SELECT * FROM products";
                                $result = query($query);
                                while($row = fetch_array($result)):
                            ?>
                      <div class="col-md-4 col-dm-6 my-3 my-md-0">      
            
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
                                <button class="btn btn-primary-outline"> <a href="product-details.php?id=<?php echo $row['id'];?>">Add to cart </a> </button>
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
</div>
<?php include('inc/footer.php'); ?>