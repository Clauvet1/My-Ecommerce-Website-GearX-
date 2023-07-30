<?php
include_once'dbh.php';

if(isset($_POST['submit'])){
    $product_name = $_POST['product_name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$descr = $_POST['descr'];
$file = $_POST['file'];

$sql = "INSERT INTO products (product_name, price, quantity, descrption, img)
      VALUES ('$product_name', '$price', '$quantity', '$descr', '$file');";

mysqli_query($conn, $sql);
header("Location: ../index.php?save=success");

}
else{
    header("Location: ../index.php?save=error");
}

?>