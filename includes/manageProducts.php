<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['app_product'])){
        if(isset($_SESSION['cart'])){
            $myitems = array_column($_SESSION['cart'], 'Item_Name');
            if(in_array($_POST['Item_Name'], $myitems)){
                echo"<script>
                alert('Item already added');
                window.location.href='../shop_1.php';
            </script>";
            }
            else
            {
            $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array('Item_Name'=>$_POST['Item_Name'], 'Price'=>$_POST['Price'], 'Quantity'=>1);
            echo"<script>
                    alert('Item already added');
                    window.location.href='../shop_1.php';
                </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0] = array('Item_Name'=>$_POST['Item_Name'], 'Price'=>$_POST['Price'], 'Quantity'=>1);
            echo"<script>
            alert('Item already added');
            window.location.href='../shop_1.php';
        </script>";
        }
    }
}




// if(isset($_GET['id'])){
    
// include_once'dbh.php';
//     $sql = "SELECT * FROM products WHERE id = $_GET[id]";
//     $result = mysqli_query($conn, $sql);
//     $resultCheck = mysqli_num_rows($result);

//     if($resultCheck >0) {
//         while($row = mysqli_fetch_assoc($result)){

//     }
//    header("Location: ../shop_1.php");

//     }
// }