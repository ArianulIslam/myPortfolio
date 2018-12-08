<?php include 'controller/function.php'; ?>
 
 
<html>
    <head>
        <title>Portfolio</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css" >
    </head>
    <body>
        
 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img width="30px" height="30px" class="logo"       
       src="img/curriculum.png"> Portfolio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Portfolio</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dashboard
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php 
            if($_SESSION['email']!==null) 
            {
 
              echo "<a class='dropdown-item' href='logout.php'>Log Out</a>";
            }
              ?>
          <a class="dropdown-item" href="register.php">Register</a>
          <div class="dropdown-divider"></div>
            <?php
            if($_SESSION['email']!==null) 
            {
             echo "<a class='dropdown-item' href='upload.php'>Upload</a>";
            }else{
                  
                  echo "<a class='dropdown-item' href='login.php'>Login</a>";
            }
              ?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
   

        
        
           <div class="container">    