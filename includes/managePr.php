<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_GET['add_product'])){
        include'dbh.php';
        $sql = "SELECT * FROM products WHERE id =  $_GET[add_product];";
                $result = mysqli_query($conn, $sql);
                $ResultCheck = mysqli_num_rows($result);

                
        if(isset($_SESSION['cart'])){
            $myitems = array_column($_SESSION['cart'], 'id');
            if($_GET['add_product'] == $myitems){
                echo"<script>
                    alert('Item already added');
                    window.location.href='../shop_1.php';
                </script>";
            }else{
                $count = count($_SESSION['car']);
                if($ResultCheck > 0){
                    while($row = mysqli_fetch_assoc($result)){
                $_SESSION['cart'][$count] = array('Item_Name'=>$row['description'],'id'=>$row['id'] , 'Price'=>$_row['Price'], 'Quantity'=>1);
                echo"<script>
                    alert('Item already added');
                    window.location.href='../shop_1.php';
                </script>";}} 
            }
        }else{
            if($ResultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $_SESSION['cart'][0] = array('Item_Name'=>$row['description'],'id'=>$row['id'] , 'Price'=>$_row['Price'], 'Quantity'=>1);
                    echo"<script>
                    alert('Item already added');
                    window.location.href='../shop_1.php';
                </script>";
                }}
        }
    }
}