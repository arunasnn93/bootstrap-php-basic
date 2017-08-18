<?php
session_start();

if(isset($_SESSION['current_user'])){
  
    header('Location:home.php');
}else{
    header('Location:login.php');
}
?>