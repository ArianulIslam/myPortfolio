<?php include 'header.php'; ?>
       
       <form class="m-2" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="emailId" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="passwordId" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" name="login" class="btn btn-primary">Sign In</button>
</form>
     
 <?php include 'footer.php'; ?>
 
 