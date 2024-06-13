<?php
    include('../reusable/con.php');
    $id = $_POST['id'];
    $schoolName = $_POST['schoolName'];
    $schoolType = $_POST['schoolType'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
 
    $sql = "UPDATE schools SET `School Name` = '$schoolName', `School Level` = '$schoolType', `Phone` = '$phone', `Email` = '$email' WHERE id = '$id'";
    
    $result = mysqli_query($connect, $sql);
    if($result) {
        header("Location: ../index.php");
    }
    else {
        die(mysqli_error($connect));
    }

?>