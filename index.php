<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

    <title>GoNihon-a tourist's guide to Japan</title>
</head>

<body>
    <?php require "partials/_header.php";?>
    <?php require "partials/_dbconnect.php";?>
    <?php require "partials/_signupmodal.php";?>
    <?php require "partials/_handlesignup.php";?>
    <!--Slider starts here-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  

    
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/shinkansen.jpg" height="450" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/mask.jpg" height="450" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/manga.jpg" height="450" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/ramen1.jpg" height="450" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <!--Carousel container starts here-->
    <div class="container">
        <h2 class="text-center my-3">Main Islands of Japan</h2>
        <div class="card-holder">
            <!--Fetch all the catagories-->
            <?php
                $sql="SELECT * FROM `categories`";
                $result=mysqli_query($conn,$sql);
                while($rows=mysqli_fetch_assoc($result)){
                    $id=$rows["category_id"];
                    $img=$rows["category_img"];
                    $name=$rows["category_name"];
                    $desc=$rows["category_description"];

                    //Card
                    echo '
                    <div id="'.$name.'" class="card my-3" style="width: 18rem;">
                        <img src="images/' . $img . '" height="150" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">' . $name . '</h5>
                            <p class="card-text">' . substr($desc,0,80) . '....</p>
                            <a href="/anurag/forum/threadlist.php?catid='. $id .'".php" class="btn btn-primary">View Threads</a>
                        </div>
                    </div>
                ';


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