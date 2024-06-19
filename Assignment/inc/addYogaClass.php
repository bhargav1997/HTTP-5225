<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        print_r($_POST);

        $className = $_POST['className'];
        $classType = $_POST['classType'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        // Include database connection
        include('../reusable/con.php');
        include('./functions.php');

        // Prepare SQL statement to prevent SQL injection
        $query = "INSERT INTO classess (`Class Name`, `Class Level`, `Phone`, `Email`) VALUES 
        ('".mysqli_real_escape_string($connect, $className)."', 
        '".mysqli_real_escape_string($connect, $classType)."', 
        '".mysqli_real_escape_string($connect, $phone)."', '
        ".mysqli_real_escape_string($connect, $email)."')";

        $result = mysqli_query($connect, $query);

        if (!$result) {
            set_messages('Query Failed' . 'error');
            die("Query Failed: " . mysqli_error($connect));
        }

        set_messages('School Added', 'success');
        
        header('Location: ../index.php');

        mysqli_close($connect);
    } else {
        header('Location: ../index.php');
        exit();
    }
?>
