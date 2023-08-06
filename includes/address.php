<?php

if(isset($_POST['submit'])){
    include_once'dbh.php';

    $country = $_POST['country'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $company_name = $_POST['company_name'];
    $town = $_POST['town'];
    $email_address = $_POST['email_address'];
    $phone = $_POST['phone'];
    $order_address = $_POST['order_address'];
    $address = $_POST['address'];
    $post_code = $_POST['post_code'];

    if(empty($country) OR empty($first_name) OR empty($last_name) OR empty($company_name) OR empty($town) OR empty($email_address) OR empty($phone) OR empty($address) OR empty($post_code)){
        echo "
            <script>
            alert('a required feild is empty') ;
            window.location.href='../checkout.php';
            </script>
        ";
        exit();
    } else{
        $sql = "INSERT INTO customeraddress (first_name, last_name, country, company_name, c_address, other_address, town, post_code, phone, email)
                VALUES ('$first_name', '$last_name', '$country', '$company_name', '$address', '$order_address','$town', '$post_code', '$phone', '$email_address');";
                mysqli_query($conn, $sql);

        echo"
            <script>
                alert('Successfuly saved!');
                window.location.href='../checkout.php';
            </script>
        ";
        }
    
}else{
    echo "An error occured pls re-submit";
    exit();    
}