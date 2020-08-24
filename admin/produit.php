
<?php include('aside.php'); ?>

<div class="col-md-8">
        <div class="toplist">
            <div class="dashboard-list">
              <h5>List Produits              <form class="form-inline">
               
                 <a href="addproduit.php"> <button class="btn btn-success" type="button"> Ajoute Produit </button> </a>
              </form></h5>
              
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nom Produit</th>
                    <th scope="col">Price Produit</th>
                    <th scope="col">Category ID</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <?php 
                                $query = "SELECT * FROM products";
                                $result = query($query);
                                while($row = fetch_array($result)):
                            ?>
                <tbody id="myTable">
                  <tr>
                    <td><?php echo $row['product_name'];?></td>
                    <td><?php echo $row['product_price'];?></td>
                    <td><?php echo $row['category_id'];?></td>
                    <td><a href="editproduit.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
          id="button1"><i class="fa fa-pencil" aria-hidden="true"></i></button></a> <a href="deleteproduit.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
          id="button1"><i class="fa fa-trash" aria-hidden="true"></i></button></a> </td>
          
                  </tr>
                  <?php 
                                endwhile;
                            ?>
                </tbody>


<!--Start Edit user-->
              </table>
            </div>              
            </div>

          </div>
    
            </div>


        </div>
      </div>

<?php include('../inc/footer.php'); ?>