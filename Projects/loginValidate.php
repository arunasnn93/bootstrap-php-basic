<?php
        include 'dbconnect.php';

    // prepare sql and bind parameters
    $stmt = $conn->prepare("SELECT * FROM wc_user WHERE username = '$_POST[username]' AND password = '$_POST[password]'");
  
 
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
   print_r($result);
die();
if($result['username'] == $_POST['username']){
    $_SESSION['current_user'] = $result['username'];
    $_SESSION['login']='t';	
      header('Location:home.php');
}else{
	$_SESSION['login']='f';
	header('Location:login.php');	
      }

?>

