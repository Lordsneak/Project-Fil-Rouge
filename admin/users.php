
<?php include('aside.php'); ?>
<div class="col-md-8">
            <div class="dashboard-list">
              <h5>List Users              <form class="form-inline">
               
                <input class="form-control form-control-sm ml-3 w-75" id="tableSearch" type="text" placeholder="Search"
                  aria-label="Search">
              </form></h5>
              
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                            <?php 
                                $query = "SELECT * FROM users";
                                $result = query($query);
                                while($row = fetch_array($result)):
                            ?>
                <tbody id="myTable">
                  <tr>
                    <td><?php echo $row['fullname'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><a href="edituser.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
          id="button1"><i class="fa fa-pencil" aria-hidden="true"></i></button></a> </td>
         
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