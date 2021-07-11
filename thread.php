<?php
require "partials/_dbconnect.php";
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin=true;

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
    <style>
        .height{
            min-height:55vh;
        }
    </style>
</head>

<body>
    <?php require "partials/_dbconnect.php";?>
    <?php require "partials/_header.php";?>
    
        
    <?php
   
  
            //INSERTING COMMENT INTO DATABASE
            if (isset($_POST['submit'])) {
                $logged_user=$_SESSION['username'];
                $thread_id=$_GET['threadid'];
                $comment=$_POST['comment'];
                $sql="SELECT user_id FROM `users` where user_name='$logged_user'";
                $result=mysqli_query($conn, $sql);
                $row=mysqli_fetch_assoc($result);
                $userid=$row['user_id'];
            
            
            
                $sql="INSERT INTO `comments` (`comment_id`, `thread_id`, `comment`, `user_id`, `posted on`) VALUES (NULL, '$thread_id', '$comment', '$userid', current_timestamp());";
                $result=mysqli_query($conn, $sql);

                if (!$result) {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Oops!</strong> Your question couldnt be added. Please try again!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
                } else {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your question was added.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
                }
            }
        
        
        ?>
    
    <!--Carousel container starts here-->
    <div class="container">
        <div class="jumbotron bg-light p-4 my-4">

        <?php
            $id=$_GET['threadid'];
            $sql="SELECT * FROM `threads` WHERE thread_id=$id";
            $result=mysqli_query($conn,$sql);
            
             while ($rows=mysqli_fetch_assoc($result)) {
                 $title=$rows['thread_title'];
                 $desc=$rows['thread_desc'];
                 $date=$rows['timestamp'];
                 

             }
        ?>


            <h2><?php echo $title;?></h2>
            <p class="lead"><?php echo $desc;?></p>
            <hr class="my-3">
            <p>This is a peer to peer forum. Spam/racism/advertisement/self-promotion/NSFW is not allowed here. Be civil and respectful while talking to other users.</p>
        

            <?php
            $thread_id=$_GET['threadid'];
            $sql="SELECT thread_user_id FROM `threads` WHERE thread_id=$thread_id";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($result);
            $userid=$row['thread_user_id'];

            $sql="SELECT user_name FROM `users` WHERE user_id='$userid'";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($result);
            $username=$row['user_name'];
            echo'
            <p><b>Posted by : </b>'.$username.'</p>';
            
            ?>


            <p><b>Posted on: </b><?php echo $date;?></p>

            
        </div>
    </div>

    
    <div class="container height">
        <h2 class="p-2">Discussions</h2>
        <?php
        //POSTING THE COMMENT
        $sql="SELECT * FROM `comments` WHERE thread_id='$thread_id'";    

        $result=mysqli_query($conn,$sql);
        $rows_affected=mysqli_affected_rows($conn);
             if($rows_affected!=0){

                while ($rows=mysqli_fetch_assoc($result)) {
                
                    $comment=$rows['comment'];
                    $userid=$rows['user_id'];
                    $date=$rows['posted on'];
                
                    $sql="SELECT user_name FROM `users` WHERE user_id='$userid'";
                    $result1=mysqli_query($conn, $sql); //DONT USE "$RESULT" HERE AS IT WILL CHNAGE THE VALUE OF $RESULT IN LOOP 
                    $row=mysqli_fetch_assoc($result1);
                    $username=$row['user_name'];
                
                     
                   
                    echo
                        '<div class="d-flex my-4 mb-1">
                        <div class="flex-shrink-0">
                            <img src="images/user.png" width="54px"alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5>'.$username.'</h5>
                            <p>'. $comment .'<p>
                            <p class="my-0 me-4"><b>Posted on: </b>'. $date .'</p>
                            
                        </div>
                        
                    </div>';

             }
            }else{
                 echo "Nothing here yet";
             }
            
            
        
        ?>
        <?php
        if($loggedin){
            $link=$_SERVER['REQUEST_URI'];
            echo
        '<form autocomplete="off"  class="p-2 mt-3"action="'.$link.'" method="post">
        <div class="mb-3">
            <label for="desc" class="form-label">Add a comment</label>
            <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-success my-2">Submit</button>
        </form>
    </div>';
        }
        else{
            echo'<p class="lead px-2">Login to add a comment</p>';
        }
        ?>

    
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


