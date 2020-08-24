
                    <!-- Category -->
                    <section id="newproduct" class="slide00-c border">
                        <h5><i class="fa fa-bars" aria-hidden="true"></i> &nbsp; Category &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <i class="fa fa-arrow-down"
                                aria-hidden="true"></i> </h5>
                    </section>
                    <div class="category00 border">
                        <!-- List Catégory -->
                        <?php 
                                $query = "SELECT * FROM category";
                                $result = query($query);
                                while($row = fetch_array($result)):
                        ?>
                        <p> <a href="category.php?id=<?php echo $row['id'];?>"><i class="<?php echo $row['category_icon'];?>" aria-hidden="true"></i> &nbsp; <?php echo $row['category_name'];?></a></p>
                        <?php 
                                endwhile;
                            ?>
                    </div>
                                        