 <?php session_start() ?>
<?php 

$_SESSION['fullName']= null;
$_SESSION['email'] = null;
$_SESSION['password'] = null;
  header("Location: index.php ");
?>