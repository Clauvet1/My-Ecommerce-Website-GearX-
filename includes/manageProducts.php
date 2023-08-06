<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['add_product'])){
        if(isset($_SESSION['cart'])){
            $product_id = array_column($_SESSION['cart'], 'id');
           
            if(in_array($_POST['id'], $product_id)){
                echo"<script>
                alert('Item already added');
                window.location.href='../shop_1.php';
            </script>";
            }
            else
            {
                $total = 1 * $_POST['price'];
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('product_name'=>$_POST['product_name'], 'descr'=>$_POST['descr'], 'id'=>$_POST['id'], 'Price'=>$_POST['price'], 'Quantity'=>1);
                echo"<script>
                        alert('Item added successfuly');
                        window.location.href='../cart.php';
                    </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0] = array('product_name'=>$_POST['product_name'], 'descr'=>$_POST['descr'], 'total'=>$total, 'Price'=>$_POST['price'], 'id'=>$_POST['id'], 'Quantity'=>1);
            echo"<script>
            alert('Item added successfuly');
            window.location.href='../cart.php';
        </script>";
        }
    }
    if(isset($_POST['Remove'])){
        foreach($_SESSION['cart'] as $key=> $value){
            if($value['id'] == $_POST['product_id']){
                unset( $_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo"<script>
                alert('Item Removed');
                window.location.href='../cart.php';
            </script>";
            }
        }
    }
}