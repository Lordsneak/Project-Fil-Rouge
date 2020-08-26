<?php include('inc/header.php'); ?>
<?php 
                                    $search = isset($_POST['search']) ? escape_string($_POST['search']) : ""; 
                                    $sql = "SELECT * FROM  products WHERE id LIKE '%$search%'
                                                OR product_description LIKE '%$search%'";
                                    $result = query($sql);
                                    if($count = mysqli_num_rows($result) > 0):
                                        while($row = fetch_array($result)):
                                ?>
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
                                <button class="btn btn-primary-outline"> <a href="product-details.php?id=<?php echo $row['id'];?>">BUY NOW !  </a> </button>
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              </div>
              
                          </div>
                        </div>
              
                      </form>
                  </div>
                  <?php 
                                    endwhile;
                                    else:
                                ?>
                                <div class="alert alert-info mt-2 mx-auto">Aucun produit trouvé.</div>
                                <?php 
                                    endif;
                                ?>
                            </div>
                  </div> 

</div>
</div>
</div>
<?php include('inc/footer.php'); ?>