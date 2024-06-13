<?php 
    if(isset($_POST['addSchool'])) {         
        print_r($_POST);

        $schoolName = $_POST['schoolName'];
        $schoolType = $_POST['schoolType'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        include('../reusable/con.php');

        $query = "INSERT INTO schools (`School Name`, `School Level`, `Phone`, `Email`) VALUES ('$schoolName', '$schoolType', '$phone', '$email')";

        $result = mysqli_query($connect, $query);

        if (!$result) {
            die("Query Failed: " . mysqli_error($connect));
        }

        header('Location: ../index.php');

        mysqli_close($connect);
    } else {
        header('Location: ../index.php');
    }
?>

