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
    <?php require "partials/_header.php";?>
    <?php require "partials/_dbconnect.php";?>
    
    <!--Carousel container starts here-->
    <div class="container">
        <div class="jumbotron bg-light p-4 my-4">

        <?php
            echo $name;
        ?>


            <h1 class="display-4">Welcome to Hokkaido</h1>
            <p class="lead">Hokkaido, the northernmost of Japan’s main islands, is known for its volcanoes, natural hot springs and ski areas. Rugged Daisetsuzan National Park is home to steaming, volcanic Mount Asahi. Shikotsu-Tōya National Park contains caldera lakes, geothermal springs and a Mount Fuji look-alike, Mount Yōtei.</p>
            <hr class="my-3">
            <p>This is the thread to discuss about tourist places in Hokkaido.</p>

        
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
        
    <div class="container">
        <h2 class="py-2">Browse Questions</h2>
        <div class="d-flex my-4">
            <div class="flex-shrink-0">
                <img src="images/user.png" width="54px"alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>I am planning to visit Hokkaido next year and I love Japanese onsen. Where should I go?</h5>
                <p>You can try the Noboribetsu onsen. The hot springs of Noboribetsu are the most popular and always at the top of the onsens in Hokkaido. The water is rich with healing minerals and is embedded in staggering surroundings, that provide visitors a complete getaway from busy cities.</p>
            </div>
        </div>

        <div class="d-flex my-4">
            <div class="flex-shrink-0">
                <img src="images/user.png" width="54px"alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>I want to try out local Hokkaido food. Is there a good place?</h5>
                <p>Visit Otaru – an old port and its Sushi Shop Street. Traditional delicious seafood meals are the main attraction here.</p>
            </div>
        </div>

        <div class="d-flex my-4">
            <div class="flex-shrink-0">
                <img src="images/user.png" width="54px"alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Hokkaido is obviously known for its mountains and snow. Can anyone recommend any good sking resort?</h5>
                <p>Go to Furano! The skiing resort is popular among the skiers and snowboarders for its exceptionally soft powdery snow. Furano has preserved its cultural heritage, yet provides visitors with plenty of fun outdoor activities.</p>
            </div>
        </div>

        <div class="d-flex my-4">
            <div class="flex-shrink-0">
                <img src="images/user.png" width="54px"alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>I want to learn about Japanese history. Is there a historical spot in Hokkaido?</h5>
                <p>Hakodate! The historic port city was the first in Japan to open international trade. Therefore its culture and architecture are quite diverse. The view from Mt. Hakodate is considered to be one of the most spectacular cityscapes in Japan!</p>
            </div>
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