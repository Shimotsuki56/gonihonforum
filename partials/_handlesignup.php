<?php
require "_dbconnect.php";


if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $showAlert=false;
    $showError_pass=false;
    $showError_name= false;
    $showError_email=false;
    $exists=false;
    
    
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    
    $existSql="SELECT * FROM `users` WHERE user_email='$email'";
    $resultexist=mysqli_query($conn,$existSql);
    $numexist=mysqli_num_rows($resultexist);

    $existSql1="SELECT * FROM `users` WHERE user_name='$username'";
    $resultexist1=mysqli_query($conn,$existSql1);
    $numexist1=mysqli_num_rows($resultexist1);
    if($numexist!=0){
        $exists=true;
        $showError_email=true;
        
    }
    if($numexist1!=0){
        $exists=true;
        $showError_name= true;
        
    }

    else{
        if (($password==$cpassword) && ($exists==false)) {
            $hash=password_hash($password, PASSWORD_DEFAULT);
            $sql="INSERT INTO `users` (`user_id`, `user_email`, `user_name`, `user_pass`, `timestamp`) VALUES (NULL, '$email', '$username', '$hash', current_timestamp());";
            $result=mysqli_query($conn, $sql);
            if ($result) {
                header('location:/anurag/forum/index.php');
                $showAlert=true;
                
            }
        }

        else{
            $showError_pass=true;
            
        }
    }

}


?>

