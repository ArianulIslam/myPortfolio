<?php include 'header.php'; ?>
     
    <form enctype="multipart/form-data" action="index.php" class="m-2" method="POST">
  <div class="form-group">
    <label for="inputProjectName">Project Title</label>
    <input name="project_title" type="text" class="form-control" id="inputProjectName" placeholder="type your project name..">
  </div>
  <div class="form-group">
    <label for="inputProjectDesc">Project Description</label>
    <textarea name="project_desc" class="form-control" id="inputProjectDesc" rows="3"></textarea>
  </div>
 <div class="form-group">
    <label for="inputProjectfile">Upload Project Screenshot (1000pxX300px) jpg or png</label>
    <input name="project_img" type="file" class="form-control-file" id="inputProjectfile">
  </div>
         <div class="form-group">
    <label for="inputProjectlink">Project Link</label>
    <input name="project_link" type="text" class="form-control" id="inputProjectlink" placeholder="paste your project link..">
  </div>
     <button type="submit" name="upload" class="btn btn-outline-success mb-2">Submit </button>      
</form>
       
       
 <?php include 'footer.php'; ?>  
 



 
 