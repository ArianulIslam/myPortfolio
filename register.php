<?php include 'header.php'; ?>
     
    <form class="m-2" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Full Name</label>
    <input type="text" class="form-control" id="inputfullName" placeholder="Your Name">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputUniName">University Name</label>
      <input type="text" class="form-control" id="inputUniName">
    </div>
    
    <div class="form-group col-md-6">
      <label for="inputDepartment">Education Background</label>
      <input type="text" class="form-control" id="inputDepartment">
    </div>
  </div>
 
  <button type="submit" class="btn btn-primary">Register</button>
</form>
 
 
 <?php include 'footer.php'; ?>

 
 