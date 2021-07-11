<?php
session_start();
require "partials/_dbconnect.php";
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin=true;
}
else{
  $loggedin=false;
}

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    
      <a class="navbar-brand" href="/anurag/forum/">
      <img src="images/japan1.png" alt="" width="40" height="34" class="d-inline-block align-text-top">
        GoNihon
      </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/anurag/forum/">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
         // $sql="SELECT category_name FROM `categories` WHERE category_id<4"
         $sql="SELECT * FROM `categories`";
         $result=mysqli_query($conn,$sql);
         while ($row=mysqli_fetch_assoc($result)) {
             echo '
            <li><a class="dropdown-item" href="/anurag/forum/threadlist.php?catid='.$row["category_id"].'">'. $row["category_name"] .'</a></li>';
            
         }
          echo '</ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
     
      
      <form action="search.php" method="get" class="d-flex" autocomplete="off">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>';

    if($loggedin){

      echo '
      <div class="ms-2 mt-3">
      <p class="text-light">Welcome '. $_SESSION['username'] .'!</p>
      </div>
      
      <div class="mx-2 my-1">
      
      <a href="/anurag/forum/partials/_handlelogout.php" class="btn btn-outline-success">Log Out</a>
      
    </div>';
    }
      
    if (!$loggedin) {
        echo '<div class="mx-2 my-1">
       
        <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</button>
        <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
      </div>';
    }
    
    echo '  
    </div>
  </div>
</nav>';



?>

<?php
require "partials/_loginmodal.php";
require "partials/_signupmodal.php";

?>