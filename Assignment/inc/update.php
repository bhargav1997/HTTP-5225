<?php
    include('../reusable/con.php');
    $id = $_POST['id'];
    $className = $_POST['className'];
    $classType = $_POST['classType'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
 
    $sql = "UPDATE classess SET `Class Name` = '$className', `Class Level` = '$classType', `Phone` = '$phone', `Email` = '$email' WHERE id = '$id'";
    
    $result = mysqli_query($connect, $sql);
    if($result) {
        header("Location: ../index.php");
    }
    else {
        die(mysqli_error($connect));
    }

?>