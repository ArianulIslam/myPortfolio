<?php include "model/db.php"; ?>
 <?php session_start() ?>
<?php 
global $counter;
function UploadProject(){
    
    global $connection;
   if(isset($_POST['upload'])){
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

function Login(){
     if(isset($_POST['login'])){
          global $connection;
         $email = $_POST['emailId'];
         $password = $_POST['passwordId'];
         
        $email = mysqli_real_escape_string($connection,$email);
        $password = mysqli_real_escape_string($connection,$password); 
         
        
    $query = "SELECT * FROM user WHERE email ='{$email}' ";
    $select_email_query = mysqli_query($connection,$query);  
    
            if(!$select_email_query){
                 die('Query Failed' .mysqli_error());
            }

         while($row = mysqli_fetch_array($select_email_query)){
             
             $db_id = $row['uid'];
             $db_email = $row['email'];
             $db_password  = $row['password'];
             $db_fullName = $row['fullName'];
             
             
         }
         
         
         if(($db_email===$email) && ($password===$db_password)){
             $counter++;
             $_SESSION['email'] = $db_email;
             
             $_SESSION['password'] = $db_password;
              $_SESSION['fullName'] = $db_fullName;
             //echo "login done";
             header("Location: upload.php ");
         }
         else {
         echo "login failed";
            // header("Location: index.php ");
             $counter = 0;
         }
          
         
     }
    
    
}
 Login();

function SignUp(){
 
      if(isset($_POST['register'])){
          
          global $connection;
          $emailId = $_POST['emailId'];
          $password = $_POST['passwordId'];
          $fullname  = $_POST['fullName'];
          $universityName = $_POST['universityName'];
          $deptName = $_POST['eduBackground'];
        
        $query = "INSERT INTO user(email,password,fullName,uniName,deptName)";
        $query .= "VALUES ('$emailId', '$password', '$fullname','$universityName','$deptName')";
        $result = mysqli_query($connection,$query);
        if(!$result){
            die('Query Failed' .mysqli_error());
        }
         
         
       header("Location: login.php ");   
     }
    
}

 SignUp();



?>

 