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
            <h1 class="display-4">Welcome to Kyushu</h1>
            <p class="lead">Kyushu, the southwesternmost of Japan’s main islands, has a mostly subtropical climate. It’s known for its active volcanoes, beaches and natural hot springs such as those at Beppu. Its city of Fukuoka is home to museums, mega-malls and Kushida-jinja, an 8th-century Shinto shrine. The city of Nagasaki's 1945 devastation by an atomic bomb is commemorated at the Nagasaki Peace Park and Atomic Bomb Museum.</p>
            <hr class="my-3">
            <p>This is the thread to discuss about tourist places in Kyushu.</p>
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
                <h5>I've always heard about people visiting Tokyo, Kyoto and Osaka. But are there any good places to visit in Kyushu? I really want to make a trip to southern Japan.</h5>
                <p>Yes! Fukuoka: Kyushu's largest and most vibrant city, Dazaifu: a historic town south of Fukuoka, Ureshino Onsen, the Yutoku Inari Shrine, etc. are some of the more visited places in Kyushu. </p>
            </div>
        </div>

        <div class="d-flex my-4">
            <div class="flex-shrink-0">
                <img src="images/user.png" width="54px"alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>I am an environmentalist and I love Minamata's environmental efforts. Can someone elaborate?</h5>
                <p>Minamata City in southern Kumamoto Prefecture gained worldwide fame in the 1950s and 1960s through a mercury poisoning disaster, caused by a local factory's discharge of poisonous wastewater into Minamata Bay. In recent decades, Minamata has been building on its negative history in a positive way and established itself as an environmental model city, promoting a wide range of recycling and environmental programs. The city is welcoming school and study tours from across Japan and the world for the study of environmental problems. Minamata is beautifully located along the coast of the Shiranui Sea with views onto the Amakusa Islands. Two hot spring resorts are located within the municipal limits of Minamata: mountainous Yunotsuru Onsen and coastal Yunoko Onsen.</p>
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