<?php 
 session_start(); 
 include_once('functions.php'); 
 include_once('configdb.php');
 if(isset($_SESSION['is_logged_in'])){ 
     redirect('index.php'); 
 }
 
 $email = $_POST['email']; 
 $password = $_POST['password']; 
 $_SESSION['email']=$username;
 
 $query = 'SELECT * FROM pengguna WHERE email=? AND password=?'; 
 $statement = $database->prepare($query); 
 $statement->bind_param('ss', $email, $password); 
 $statement->execute(); 
 $result_set = $statement->get_result(); 
 
 if($result_set->num_rows){
  $_SESSION['login'] = TRUE; 
  redirect('menu.php'); 
 }else{ 
  redirect('index.php');
  echo '<script type="text/javascript">alert("Anda Tidak Terdaftar, Silahkan Login Terlebih Dahulu");</script>';
 } 
?> 