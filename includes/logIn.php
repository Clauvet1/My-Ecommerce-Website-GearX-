<?php


if(isset($_POST['submit'])){
    include_once'dbh.php';

    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $sql = "SELECT* FROM users";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if(empty($user_id) || empty($password)){
        header("Location: ../SignIn.php?SignIn=You left a field empty");
                exit();
    } else{
    if($resultCheck >0){
        while($row = mysqli_fetch_assoc($result)){
            if($row['email'] OR $row['userName'] == $user_id AND $row['user_password'] == $password){
                header("Location: ../index.php?SignIn=success");
                exit;
            }else{
                header("Location: ../SignIn.php?SignIn=failed");
                exit;
            }

        }
    }
 else{
    header("Location: ../SignIn.php?SignIn=failed");
    echo "An error occured pls re-submit";
    exit();
} }}