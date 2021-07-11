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
            <h1 class="display-4">Welcome to Shikoku</h1>
            <p class="lead">Shikoku is the smallest of Japan’s major islands. It's encircled by a 1,200km, 88-temple Buddhist pilgrimage route (henro) honoring the 9th-century monk Kukai. Shikoku's major cities include Matsuyama, home to 8 of the pilgrimage temples, plus feudal Matsuyama Castle and Dogo Onsen, one of Japan’s earliest known hot-spring spas. The island’s mountainous interior has hiking trails and rivers with whitewater rapids.</p>
            <hr class="my-3">
            <p>This is the thread to discuss about tourist places in Shikoku.</p>
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
                <h5>As a nature lover, what places should I visit in Shikoku?</h5>
                <p>Naoshima, is a special place where nature and contemporary art coexist. Mt. Ishizuchi, one of the highest peaks in West Japan, is a popular destination for hikers. You can gaze upon the Naruto whirlpools, which are some of the largest whirlpools in the world. The thatched traditional house known as Chiiori, which is located in the Iya valley, is known as one of the three most remote places in Japan as well as the place where the defeated Heike warriors took refuge at the end of the 12th century. It provides a wonderful exploration of both past and present.</p>
            </div>
        </div>

        <div class="d-flex my-4">
            <div class="flex-shrink-0">
                <img src="images/user.png" width="54px"alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Are there good festive places in Shikoku?</h5>
                <p>The Shimanto River, which is called Japan's last clear stream, is where local people enjoy many forms of river recreation. Kompira Shrine is home to the god of the sea, the protector of those who travel on the waves. Dogo Hot Spring is one of Japan's oldest hot springs and has several thousand years of history. The Awa Odori summer festival attracts 1.3 million people annually, and Kochi prefecture's summer Yosakoi festival attracts 1 million people. Both are spectacular. Kochi's outdoor Sunday Market is one of Japan's largest markets, and a place where vendors and locals gather.</p>
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