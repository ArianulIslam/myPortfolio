<?php include "model/db.php"; ?>
 
<?php 

function UploadProject(){
    
    global $connection;
   if(isset($_POST['submit'])){
        $projectTitle = $_POST['project_title'];
        $projectDesc = $_POST['project_desc'];
        $projectImage = $_FILES['project_img']['name'];
        $project_img_tmp = $_FILES['project_img']['tmp_name'];
        $project_link = $_POST['project_link'];
         move_uploaded_file($project_img_tmp,"img/$projectImage");
        $query = "INSERT INTO projects(project_title,project_desc,project_img,project_link) ";
        $query .= "VALUES ('$projectTitle', '$projectDesc', '$projectImage','$project_link')";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die('Query Failed' .mysqli_error());
        }
          
    }
 
    
    
}
UploadProject();


function viewUploadProject(){
     global $connection;
    $query = "SELECT * FROM projects";
       $result = mysqli_query($connection,$query);
     while($row = mysqli_fetch_assoc($result)){
         $project_title = $row['project_title'];
         $project_Desc  = $row['project_desc'];
         $project_Image = $row['project_img'];
         $project_link = $row['project_link'];
         echo "<div class='card m-2'>";
         echo " <div class='card-header'> Featured</div>";
         echo "<img class='card-img-top p-2' width='1000px' height='300px' src='img/$project_Image' alt='Card image cap'>";   
         echo "<div class='card-body'>";
         echo "<h5 class='card-title'>$project_title</h5>";
         
         echo " <p class='card-text'>$project_Desc</p>";
         echo" <a href='$project_link' target='_blank' class='btn btn-primary'>View Project</a>"; 
         echo "</div>";
         echo "</div>";
     } 
    
   
    
}

?>

 