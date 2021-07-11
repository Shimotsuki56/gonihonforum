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
    #maincontainer{
        min-height:100vh;
    }
    </style>
</head>

<body>
    <?php require "partials/_header.php";?>
    <?php require "partials/_dbconnect.php";?>
   

   
 
    <!--Search Results-->
    <div class="search container my-4" id="maincontainer">
        <h1 class="lead">Search Results for "<b><em><?php echo $_GET['search'];?></em></b>"</h1 class="lead">

        <?php
        $noresults=true;
     $search=$_GET['search'];
     $sql="SELECT * FROM `threads` where match(thread_title,thread_desc)against('$search')";    
        $result=mysqli_query($conn,$sql);
        while ($rows=mysqli_fetch_assoc($result)) {
            $noresults=false;
           $title=$rows['thread_title'];
           $desc=$rows['thread_desc'];
           $id=$rows['thread_id'];
           $url="thread.php?threadid=".$id."";
            echo '<div class="result my-4">
            </ol>
            <li><a href="'.$url.'" class="lead text-dark">'.$title.'</a></li>
            <p>'.$desc.'</p>
        </div></ol>';
        }

        if($noresults){
            echo '
            <div class="jumbotron bg-light p-4 my-4">
                <div class="container">
                    <p class="display-4">No Results Found</p>
                    <p class="lead">Suggestions: <ul>

                   <li> Make sure that all words are spelled correctly.</li>
                   <li> Try different keywords.</li>
                    <li>Try more general keywords.</li>
                    </ul>
                    </p>
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