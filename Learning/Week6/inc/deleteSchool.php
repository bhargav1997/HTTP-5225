<?php
    include('../reusable/con.php');
    include('functions.php');

    if(isset($_GET['id'])) {
        print_r($_GET);
        $id = $_GET['id'];

        $id = intval($id); // convert string to int

        $query = "DELETE FROM schools WHERE `id` = '$id'";
        $result = mysqli_query($connect, $query);

        if (!$result) {
            set_messages('Something went wrong' , 'error');
            die('Query Failed' . mysqli_error($connect));
        }
        set_messages('School Deleted Successfully', 'success');
        header('Location: ../index.php');
        mysqli_close($connect);
    } else {
        echo 'Something went wrong! Please try again later.';
    }
?>