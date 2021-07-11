<?php
require "_dbconnect.php";



$showError=false;
$exists=false;
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $username=$_POST['log_username'];
    $password=$_POST['log_password'];
    

    
    $sql="SELECT * FROM `users` WHERE user_name='$username'";
    
    
    $result=mysqli_query($conn,$sql);
    
    $num=mysqli_num_rows($result);
    if($num==1){
        $exists=true;
        while($row=mysqli_fetch_assoc($result)){
            
            if(password_verify($password,$row['user_pass'])){
                $login=true;
                $showError=false;
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['username']=$username;

                header("location:/anurag/forum/");
                
            }
            else{
                $showError=true;
                echo "Wrong login credentials. Please try again.";
                header("location:/anurag/forum/");

            }
        }

    }
    else{
        $showError=true;
        echo "This username does not exist. Please sign-up.";
    }
        
        

    }




