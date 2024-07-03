<?php
    include('../reusable/con.php');
    include('./functions.php');

    if(isset($_GET['id'])) {
        print_r($_GET);
        $id = $_GET['id'];

        $id = intval($id); // convert string to int


        $query = "DELETE FROM classess WHERE `id` = '$id'";
        $result = mysqli_query($connect, $query);

        if (!$result) {
            set_messages('Something went wrong' . 'error');
            die('Query Failed' . mysqli_error($connect));
        }

        header('Location: ../index.php');
        mysqli_close($connect);
    } else {
        set_messages('Something went wrong, please try again' . 'error');
    }
?>