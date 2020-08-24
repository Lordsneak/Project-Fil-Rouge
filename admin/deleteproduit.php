
<?php
  require('../inc/fonctions.php');
  if(!isset($_SESSION["username"])){
    header("Location: ../login.php");
    exit();
  }
?>
<?php					$id = escape_string($_GET['id']);
                    $query = "DELETE FROM products WHERE id = '$id'";
                    $result = query($query);
                    redirect("produit.php");
                	?>