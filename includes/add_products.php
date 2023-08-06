<?php
include_once'dbh.php';

if(isset($_POST['submit']) && isset($_FILES['img'])){

    
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $descr = $_POST['descr'];

    //for image
    // echo"<pre>";
    //     print_r($_FILES['img']);
    // echo"</pre>";
    $img_name = $_FILES['img']['name'];
    $img_size = $_FILES['img']['size'];
    $img_tmp_name = $_FILES['img']['tmp_name'];
    $img_error = $_FILES['img']['error'];

    if($img_error == 0){
        if($img_size > 1048576){
            echo"
            <script>
                alert('Sorry, your file is too large!');
                window.location.href='../index.php';                      
            </script>
        ";
        }else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpeg", "jpg", "png");
            if(in_array($img_ex_lc, $allowed_exs)){
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = '../uploads/'.$new_img_name;
                move_uploaded_file($img_tmp_name, $img_upload_path);

                $sql = "INSERT INTO products (product_name, price, quantity, p_description, img) VALUES ('$product_name', '$price', '$quantity', '$descr', '$new_img_name');"; 
                mysqli_query($conn, $sql);
                echo"
                        <script>
                            alert('Product Info has successfuly been added to the database');
                            window.location.href='../index.php';
                        </script>
                    ";

                // if(mysqli_num_rows($result) > 0 ){
                //     while($product = mysqli_fetch_assoc($result)){

                //     }
                // }
            } else{
                echo"
            <script>
                alert('You can not upload files of this type!');
                window.location.href='../index.php';
            </script>
        ";
            }
            }

    }else{
        echo"
            <script>
                alert('An unknown error occured!');
                window.location.href='../index.php';
            </script>
        ";

    }


// $file = $_POST['file'];

// $sql = "INSERT INTO products (product_name, price, quantity, descrption, img)
//       VALUES ('$product_name', '$price', '$quantity', '$descr', '$file');";

// mysqli_query($conn, $sql);
// header("Location: ../index.php?save=success");
// exit();
}
else{
    header("Location: ../index.php?save=error");
    exit();
}

?>