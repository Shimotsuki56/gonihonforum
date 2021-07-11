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
            <h1 class="display-4">Welcome to Okinawa</h1>
            <p class="lead">Okinawa is a Japanese island in the East China Sea. In Naha city, Shuri Castle is the rebuilt palace of the Ryukyu Kingdom. One of several remaining Ryukyuan fortresses on Okinawa from the Gusuku period, it features the ornate gate of Shureimon. The Okinawa Prefectural Museum has exhibitions on Okinawa’s natural and cultural heritage, plus a collection of fine art. Kokusai Street is lined with shops and restaurants. </p>
            <hr class="my-3">
            <p>This is the thread to discuss about tourist places in Okinawa.</p>
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
                <h5>What does Okinawa offer?</h5>
                <p>As Okinawa lies off the coast of Kyushu, it enjoys a mostly subtropical climate and is known as one of the best places to come in Japan if you are looking for some sand, sun and surf. Okinawa is also known for having a distinct feel to the rest of Japan as it is so far south and it is makes a refreshing change from the big cities for which the country is always associated with such as Tokyo and Osaka.</p>
            </div>
        </div>


        <div class="d-flex my-4">
            <div class="flex-shrink-0">
                <img src="images/user.png" width="54px"alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>I've heard that there is a type of snake liquor available in Okinawa. Is it true?</h5>
                <p>Yes, it is. Okinawa World is located on Okinawa Honto and is a theme park which also encompasses the Gyokusendo Cave. The chamber spans almost 900 meters and is filled with stunning stalagmites and stalactites. Outside the cave you will find a number of souvenir stalls where you can pick up some local trinkets including snake liquor which is one of the delicacies in Okinawa. To see the snakes before they got turned into liquor, you can also visit the neighboring snake exhibition which is close to the cave.</p>
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