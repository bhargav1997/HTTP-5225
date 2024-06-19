<?php 
    include('functions.php');

    if(isset($_POST['addSchool'])) {         
        print_r($_POST);

        $schoolName = $_POST['schoolName'];
        $schoolType = $_POST['schoolType'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        include('../reusable/con.php');

        $query = "INSERT INTO schools (`School Name`, `School Level`, `Phone`, `Email`) VALUES 
        ('".mysqli_real_escape_string($connect, $schoolName)."', 
        '".mysqli_real_escape_string($connect, $schoolType)."', 
        '".mysqli_real_escape_string($connect, $phone)."', '
        ".mysqli_real_escape_string($connect, $email)."')";

        $result = mysqli_query($connect, $query);

        if (!$result) {
            set_messages('Error, School Not Added' , 'error');
            die("Query Failed: " . mysqli_error($connect));
        }

        set_messages('School Added', 'success');
        
        header('Location: ../index.php');

        mysqli_close($connect);
    } else {
        header('Location: ../index.php');
    }
?>

