<?php

function check_login_user(){
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    // Check, if username session is NOT set then this page will jump to home page
    if (!isset($_SESSION['email'])) {
        if (!isset($_SESSION['password'])) {
            header('Location: index.php');
            exit;
        }
    }
}

?>