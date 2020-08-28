<?php 
require('inc/fonctions.php');
if(isset($_POST['id']) && isset($_POST['qte'])){
    $id = escape_string($_POST['id']);
    $qte = escape_string($_POST['qte']);
    $sql = "SELECT * FROM products WHERE id = '$id'";
    $result = query($sql);
    $product = fetch_array($result);
    if($_SESSION['products_'.$id]['product'] == $_POST['product']){
        $message = "Vous avez déja ajouté ce produit à votre panier";
        redirect("cart.php?message=".$message);
    }else{
        if($product['product_quantity'] < $qte){
            $message = "la quantité disponible en stock est : ".$product['product_quantity'];
            redirect("cart.php?message=".$message);
        }else{
            $_SESSION['products_'.$product['id']] = array(
                'id'=>$product['id'],
                'product'=>$product['product_name'],
                'price'=>$product['product_price'],
                'qte'=> $qte,
                'total'=> $product['product_price'] * $qte,
            );
            $_SESSION['totaux'] += $_SESSION['products_'.$product['id']]['total'];
            $_SESSION['count'] += 1;
            redirect("cart.php");
        }
    }
}