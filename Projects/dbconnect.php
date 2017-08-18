<?php
        error_reporting(E_ALL);
        ini_set('display_errors',1);
        session_start();
        $servername = "mysql6.000webhost.com";
$username = "a9263846_wcity";
$password = "abcd1234";
$dbname = "a9263846_wcity";
if(isset($_POST['username'])&&isset($_POST['password'])){
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
?>