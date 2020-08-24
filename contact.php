<?php include('inc/header.php'); ?>

<?php 
                            if(isset($_POST['submit'])){
                                $commenter_name = escape_string($_POST['commenter_name']);
                                $email = escape_string($_POST['email']);
                                $commenter_suject = escape_string($_POST['commenter_suject']);
                                $sql = "INSERT INTO commenter VALUES ('','$commenter_name','$email','$commenter_suject')";
                                if(query($sql)){
                                    echo '
                                    <script type="text/javascript">
                                    alert("Message Send.");
                                    window.location = "index.php";
                                </script>';
                                }else{
                                    echo 'Fail to create Annance
                                    <script type="text/javascript">
                                    alert("Message Not Send. .");
                                    window.location = "contact.php";
                                </script>';
                                }
                            }   
                        ?>
        <div class="menubarcategory text-left">
        <p class="category-top">
        <a href="/">Home</a>
        </p>
        <p>
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        </p>
        <p class="category-top">
        <a href="contact.php">Contact</a>
        </p>
</div>
<div class="container">
    <div class="row justify-content-center">
      <h6 >
        Contact :
      </h6>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="contact">
            <form action="#" method="POST" > 
					<div class="form-group">
                      <input type="text" class="form-control" name="commenter_name" placeholder="Your Name"/>
                      </div>
										
                      <div class="form-group">
                      <input class="form-control" type="email" name="email" placeholder="Email Address"/>
                      </div>


                    
                    <div class="form-group">
                        <textarea class="form-control" name="commenter_suject"></textarea>
                        </div>
										<button type="submit" name="submit" class="btn btn-primary">
											Submit
                    </button>
                  
					</form>
      </div>
    </div>
  </div>








<?php include('inc/footer.php'); ?>