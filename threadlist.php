<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin=true;
    $username=$_SESSION['username'];
  }
  else{
    $loggedin=false;
  }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>GoNihon-a tourist's guide to Japan</title>
</head>

<body>
    <?php require "partials/_dbconnect.php";?>
    <?php require "partials/_header.php";?>
    
    <?php
        
        // ADD YOUR COMMENT TO THE DATABASE
        if(isset($_POST['submit'])){

            $logged_user=$_SESSION['username'];
            $sql="SELECT * FROM `users` WHERE `user_name`='$logged_user'";
            $res=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($res);
            $user_id=$row['user_id'];
            
            $id=$_GET['catid'];            
            $th_title=$_POST['title'];
            $th_desc=$_POST['desc'];
            $th_title=str_replace("<","&lt;",$th_title);
            $th_title=str_replace(">","&gt;",$th_title);
            $th_desc=str_replace("<","&lt;",$th_desc);
            $th_desc=str_replace(">","&gt;",$th_desc);
            
            $sql_insert="INSERT INTO `threads` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES (NULL, '$th_title', '$th_desc', '$id', '$user_id', current_timestamp())";
            $result=mysqli_query($conn,$sql_insert);

            if(!$result){ echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Oops!</strong> Your question couldnt be added. Please try again!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
                
            }
            else{
                
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your question was added.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
               
            // echo mysqli_error($conn);
            }
        }
        
        ?>
    
    <!--Carousel container starts here-->
    <div class="container my-4">
        <div class="jumbotron bg-light p-4 my-4">

        <?php
            $id=$_GET['catid'];
             $sql="SELECT * FROM `categories` WHERE category_id=$id";
             $result=mysqli_query($conn,$sql);
             while ($rows=mysqli_fetch_assoc($result)) {
                 $name=$rows['category_name'];
                 $desc=$rows['category_description'];

             }
        ?>




            <h1 class="display-4">Welcome to <?php echo $name;?></h1>
            <p class="lead"><?php echo $desc;?></p>
            <hr class="my-3">
            <p>This is the thread to discuss about tourist places in <?php echo $name;?>.</p>

        
            <h3 class="my-3 mt-4">Forum Rules</h3>
                <ul>
                <li>No Spam / Advertising / Self-promote in the forums.</li>
                <li>Do not post copyright-infringing material.</li>
                <li>Do not post “offensive” posts, links or images.</li>
                <li>Do not cross post questions.</li>
                <li>Do not PM users asking for help.</li>
                <li>Remain respectful of other members at all times.</li>
          

                
                </ul>
            
        </div> 
    </div>
        
    <!-- VIEW QUESTIONS POSTED BY OTHERS -->
    <div class="container">
        <h2 class="p-2">Browse Questions</h2>
        <?php if(!$loggedin){echo '<p class="lead p-2">You are not logged in. Please log in to add a question</p>';}?>
        <?php
        $sql="SELECT * FROM `threads` WHERE thread_cat_id=$id";
        $result=mysqli_query($conn,$sql);
        $noResult=true;
        while ($rows=mysqli_fetch_assoc($result)) {
            $noResult=false;
            $title=$rows["thread_title"];
            $desc=$rows["thread_desc"];
            $th_id=$rows["thread_id"];
            $time=$rows['timestamp'];
            $userid=$rows['thread_user_id'];

            $sql1="SELECT * FROM `users` WHERE user_id='$userid'";
            $result1=mysqli_query($conn,$sql1);
            $url=$_SERVER['REQUEST_URI'];
            while ($rows1=mysqli_fetch_assoc($result1)) {
                $user=$rows1['user_name'];
            }
                echo
                    '
                    <div class="d-flex my-4">
                    <div class="flex-shrink-0">
                        <img src="images/user.png" width="54px"alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h5>'. $user .'</h5>
                        
                        <p class="lead"><a class="text-dark text-decoration-none" href="/anurag/forum/thread.php?threadid='.$th_id.'">'. $title .'</a><p>
                        <p>'. $desc .'</p>
                        <p>posted on: <b>'. $time .'</b></p>
                    </div>
                </div>';
            
        }
       
        if($noResult){
            echo '<div class="jumbotron jumbotron-fluid my-4 bg-light p-3 text-center">
            <div class="container">
              <h1 class="display-4">Oh snap! All empty?</h1>
              <p class="lead">Be the first one to ask a question</p>
            </div>
          </div>';
        }

        
        ?>
     
    <div class="container">
    
    
    <?php
    if ($loggedin) {
        echo'<h2 class=>Start a discussion!</h2>
    <form action="'. $_SERVER["REQUEST_URI"] .'" method="post" autocomplete="off">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"required>
        <div id="emailHelp" class="form-text">Keep the title short and precise</div>
    </div>
    <div class="mb-3">
        <label for="desc" class="form-label">Describe your question</label>
        <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-success my-2">Submit</button>
    </form>
    
    </div>
    </div>';
    }

    ?>

</div>
</div>
        <?php require 'partials/_footer.php';?>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>     


<!-- http://localhost/anurag/forum/threadlist.php?catid=1?threadid=4
http://localhost/anurag/forum/thread.php?threadid=3 -->