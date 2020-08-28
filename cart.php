<?php include('inc/header.php'); ?>
<div class="container">
    <div class="card main bg-light">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    $item_name = 1;
                    $item_number = 1;
                    $amount = 1;
                    $quantity = 1;
                    if(isset($_GET['message'])){
                        echo '<div class="alert alert-danger p-2 mt-2">'.$_GET['message'].'</div>';
                    }   
                ?>
                <div class="card mt-2 mb-3 mx-2">
                    <form action="https://sandbox.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="sb-cqnpe2172239@business.example.com">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Produit</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                            foreach($_SESSION as $name => $product):      
                        ?>
                                <?php 
                            if(substr($name,0,9) == "products_"):   
                        ?>
                                <tr>
                                    <td>
                                        <?php echo !empty($product['product']) ? $product['product'] : ""?>
                                    </td>
                                    <td>
                                        <?php echo !empty($product['price']) ? $product['price'] : ""?>
                                    </td>
                                    <td>
                                        <?php echo !empty($product['qte']) ? $product['qte'] : ""?>
                                    </td>
                                    <td>
                                        <?php echo !empty($product['total']) ? $product['total'] : ""?>
                                    </td>
                                    <td>
                                        <a href="cancel_cart.php?id=<?php echo !empty($product['id']) ? $product['id'] : ""?>&price=<?php echo !empty($product['total']) ? $product['total'] : ""?>"
                                            class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <input type="hidden" name="item_name_<?php echo $item_name?>"
                                    value="<?php echo !empty($product['product']) ? $product['product'] : ""?>">
                                <input type="hidden" name="item_number_<?php echo $item_number?>"
                                    value="<?php echo !empty($product['id']) ? $product['id'] : ""?>">
                                <input type="hidden" name="amount_<?php echo $amount?>"
                                    value="<?php echo !empty($product['price']) ? $product['price'] : ""?>">
                                <input type="hidden" name="quantity_<?php echo $quantity?>"
                                    value="<?php echo !empty($product['qte']) ? $product['qte'] : ""?>">
                                <?php 
                                $item_name++;
                                $item_number++;
                                $amount++;
                                $quantity++;
                            ?>
                                <?php 
                                endif;  
                            ?>
                                <?php 
                                endforeach;  
                            ?>
                            </tbody>
                        </table>
                        <?php 
                        if(isset($_SESSION['totaux']) && $_SESSION['totaux'] > 0):
                    ?>
                        <?php 
                        endif;
                    ?>
                        <br>
                        <br>
                        <br>
                        
                        <table class="table table-bordered">
                        <div class="mb-3">
                                <label for="name">Full Name :</label>
                                <input type="text" class="form-control" id="name" placeholder="Name">
                                <div class="invalid-feedback"> Please enter a valid Name.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email :</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                                <div class="invalid-feedback"> Please enter a valid Email.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Adresse"
                                    required="">
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="state">Region</label>
                                    <select class="custom-select d-block w-100" id="state" required="">
                                        <option value="">Choose...</option>
                                        <option>Safi-Marrakech</option>
                                    </select>
                                    <div class="invalid-feedback"> Please provide a valid state. </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Zip</label>
                                    <input type="text" class="form-control" id="zip" placeholder="" required="">
                                    <div class="invalid-feedback"> Zip code required. </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="telephone">Telephone</label>
                                    <input type="text" class="form-control" id="telephone" placeholder="" required="">
                                    <div class="invalid-feedback"> Telephone required. </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                        </table>
                        <div class="row">
                            <button type="submit" value="1" name="upload" class="btn btn-success mx-3"><i
                                    class="fa fa-credit-card"></i> Valider vos achat</button>

                    </form>

                </div>
            </div>

            <div class="col-md-4 ml-auto">
                <table class="table table-bordered">
                    <thead>
                        <th>Produits</th>
                        <th>Total HT</th>
                    </thead>
                    <tbody>
                        <td>
                            <?php echo !empty($_SESSION['count']) ? $_SESSION['count'] : ""?>
                        </td>
                        <td class="text-danger font-weight-bold">
                            <?php echo !empty($_SESSION['totaux']) ? $_SESSION['totaux'].' $' : ""?></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
    <?php include('inc/footer.php'); ?>