<?php
if ( panier = 1 ) {
    empty_cart($_GET['id'],$_GET['price']);
}else {
    echo "error"
    redirect('cart.php')
}