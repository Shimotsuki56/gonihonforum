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
            <h1 class="display-4">Welcome to Honshu</h1>
            <p class="lead">Honshu is Japan’s main island and home to most of the country’s major cities and cultural sites. On the east coast is the Japanese capital, Tokyo, a busy global hub for finance, industry, fashion and cuisine. Mount Fuji, an iconic, snow-capped volcano, lies southwest of the city. In central Honshu, the city of Kyoto is famed for its Zen temples, gardens lined with cherry blossoms and traditional geisha entertainment.</p>
            <hr class="my-3">
            <p>This is the thread to discuss about tourist places in Honshu.</p>
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
                <h5>What is Honshu known for?</h5>
                <p>Honshu is regarded as the Japanese mainland. The Pacific coast is the country’s main economic centre, lined with the metropolitan areas of Tokyo–Yokohama and Ōsaka–Kōbe. Honshu also contains Japan’s highest mountain, Mount Fuji, and its largest lake, Lake Biwa.</p>
            </div>
        </div>

        <div class="d-flex my-4">
            <div class="flex-shrink-0">
                <img src="images/user.png" width="54px"alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>As a foreigner, I recently moved to Tokyo, and I want to know more about the Honshu island, which is now my new home. What tourist spots can I visit during the upcoming Golden Week holiday?</h5>
                <p>Honshu can be broken up into five smaller regions: Tohoku in the north, Kanto to the east, Chubu in the center, Kansai in the south and Chugoku to the west. Tohoku is the more remote, known for skiing and onsen (hot spring baths), while Kanto is dominated by the megalopolis of Tokyo and Yokohama. Mount Fuji and the Fuji Five Lakes are in the Chubu region, as well as tourist-favorite Takayama. You can head to Kansai for the famous temples of Kyoto and the buzzing alternative scene of Osaka, day tripping to nearby Kobe to get their fill of wagyu beef, before taking the train down south into Chugoku to see Hiroshima and the floating red gate at Miyajima.</p>
            </div>
        </div>

        <div class="d-flex my-4">
            <div class="flex-shrink-0">
                <img src="images/user.png" width="54px"alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>I want to visit the Hamamatsu Castle in Shiuoka. What is the best time to go there?</h5>
                <p>I'd say the best time would be the spring season when you can get to see a lot of Sakura which make the experience very pleasant. Also, the castle has a 360-degree viewing deck on the third floor where you can catch a breathtaking glimpse of Mount Fuji on a day, when it isnt cloudy.</p>
            </div>
        </div>

        <div class="d-flex my-4">
            <div class="flex-shrink-0">
                <img src="images/user.png" width="54px"alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Haikyuu is my favourite anime, which is why I really want to visit Miyagi, the home-town of the Karasuno team. Are there any good spots in Miyagi that I can visit?</h5>
                <p>Well you know, Miyagi is a prefecture with Sendai as its capital. As beautiful as Sendai is, a trip to nearby Matsushima to witness one of Japan’s top three scenic views, hiking around Kinkasan’s Golden Mountain, hot spring action at Naruko and Akiu, and skiing at Onikobe can make your experience worthwhile.</p>
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