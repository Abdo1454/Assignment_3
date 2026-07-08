<?php
session_start();
$price =$_POST["price"];
$qauntity =$_POST["qauntity"];
$errors[] = "";
if (empty($price) || empty($qauntity)) {
    $errors[] = "Please enter a number.";
    $_SESSION['errors'] = $errors;
    header("Location: home.php");
    exit();
} elseif (!is_numeric($price)) {
    $errors[] = "Please enter numbers only.";
    $_SESSION["errors"] = $errors;
    header("Location: home.php");
    exit();
} elseif ($price < 0) {
    $errors[] = "The number must be greater than or equal to 0.";
    $_SESSION["errors"] = $errors;
    header("Location: home.php");
    exit();
} else {
   $product=$price*$qauntity;
   if ($product<= 1000) {
    echo "total price equal  ". $product-($product*.1) ;
      }else{
          echo "total price equal  ". $product-($product*.15) ;
      }
}
?>