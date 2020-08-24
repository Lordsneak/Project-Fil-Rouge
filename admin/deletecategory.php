<?php
  require('../inc/fonctions.php');
  if(!isset($_SESSION["username"])){
    header("Location: ../login.php");
    exit();
  }
?>
<?php
					$id = escape_string($_GET['id']);
                    $query = "DELETE FROM category WHERE id = '$id'";
                    $result = query($query);
                    redirect("category.php");
                	?>