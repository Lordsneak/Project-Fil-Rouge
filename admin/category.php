
<?php include('aside.php'); ?>

<div class="col-md-8">
        <div class="toplist">
            <div class="dashboard-list">
              <h5>List Category              <form class="form-inline">
               
                 <a href="addcategory.php"> <button class="btn btn-success" type="button"> Ajoute Category </button> </a>
              </form></h5>
              
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nom Category</th>
                    <th scope="col">Icon</th>

                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <?php 
                                $query = "SELECT * FROM category";
                                $result = query($query);
                                while($row = fetch_array($result)):
                            ?>
                <tbody id="myTable">
                  <tr>
                    <td><?php echo $row['category_name'];?></td>
                    <td><?php echo $row['category_icon'];?></td>
                    <td><a href="editcategory.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
          id="button1"><i class="fa fa-pencil" aria-hidden="true"></i></button></a> <a href="deletecategory.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
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