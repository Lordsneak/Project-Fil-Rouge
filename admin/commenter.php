
<?php include('aside.php'); ?>

<div class="col-md-8">
        <div class="toplist">
            <div class="dashboard-list">
              <h5>List Commenter              <form class="form-inline">
               
              <input class="form-control form-control-sm ml-3 w-75" id="tableSearch" type="text" placeholder="Search"
                  aria-label="Search">
              </form></h5>
              
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <?php 
                                $query = "SELECT * FROM commenter";
                                $result = query($query);
                                while($row = fetch_array($result)):
                            ?>
                <tbody id="myTable">
                  <tr>
                    <td><?php echo $row['commonter_name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['commonter_subject'];?></td>
                    <td><a href="editcommenter.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
          id="button1"><i class="fa fa-pencil" aria-hidden="true"></i></button></a> <a href="deletecommenter.php?id=<?php echo $row['id'];?>"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
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