<?php include('aside.php'); ?>

<?php 
                            if(isset($_POST['submit'])){
                                $annance_nom = escape_string($_POST['annance_nom']);
                                $annance_image = escape_string($_POST['annance_image']);
                                $sql = "INSERT INTO annance VALUES ('','$annance_nom','$annance_image')";
                                if(query($sql)){
                                    echo '
                                    <script type="text/javascript">
                                    alert("Annance Added.");
                                    window.location = "annance.php";
                                </script>';
                                }else{
                                    echo 'Fail to create Annance
                                    <script type="text/javascript">
                                    alert("Fail to create Annance .");
                                    window.location = "addannance.php";
                                </script>';
                                }
                            }   
                        ?>
 
<div class="col-md-8">
   <div class="">
    <div class="form-container">


                <h2 class="text-center">Add Annance</h2>
              <form action="#" method="POST">
              <input type="hidden" name="id" />
                <div class="form-group">
                <label for="">Nom annance :</label>
                  <input type="text" class="form-control" name="annance_nom" id="recipient-name">
                </div>
                <div class="form-group">
                <label for="">Lien Image :</label>
                  <input type="text" class="form-control" name="annance_image" id="recipient-name"">
                </div>
                <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-primary">Add Annance</button>
              </div>
              </form>
              </div>
            </div>
            </div>

<?php include('../inc/footer.php'); ?>