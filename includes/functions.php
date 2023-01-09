<?php
    function url($str){
        return 'http://localhost/duranta/'.$str;
    }

    function redirect($page){
        header("Location: http://localhost/duranta/admin/".$page);
    }

    function check_login(){
        if(empty($_SESSION['user'])){
            redirect('login.php');
        }
    }
?>
