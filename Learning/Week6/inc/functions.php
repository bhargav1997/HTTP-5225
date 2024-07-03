<?php
    session_start();

    function secure(){
        if(!isset($_SESSION['id'])){
            header('Location: ./login.php');
        }
    }
    
    function set_messages($message, $className){
        $_SESSION['message'] = $message;
        $_SESSION['className'] = $className;
    }

    function get_messages(){
        if(isset($_SESSION['message'])){
            $message = $_SESSION['message'];
            echo '<div class="alert alert-'.$_SESSION['className'].'" role="alert">
            '.$message.'
            </div>';
            unset($_SESSION['message']);
            unset($_SESSION['className']);
        }
    }
?>
