<?php 
  include "conn.php";
  include "auth.php";
?>
<?php
  $selectSql="SELECT * FROM `dp` WHERE `username` = '$username';";
  $result = mysqli_query($conn, $selectSql);
  $data =mysqli_fetch_array($result);
  if ($data) {
  $folder = $data['folder'];
  }
  else
  {
  $folder = "asset/user.png";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
  <title>Namaste - Home</title>
  <style>
    html {
      scroll-behavior: smooth;
    }
    .carousel-item {
      height: 100vh;
      min-height: 350px;
      background: no-repeat center center scroll;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      }
  </style>
</head>
<body>

<!-- fixed navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
<div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="img/n.jpg" class="rounded-circle" width="35" height="35" class="d-inline-block align-top" alt="Logo">
      <b>NAMASTE</b> 
    </a>

    <ul class="navbar-nav ml-auto">
      <!-- Avatar -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
          <img src="<?php echo $folder; ?>" class="rounded-circle" height="30" alt="user" loading="lazy"/><div class="text-dark">&nbsp;<?php echo $_SESSION['username']; ?>&nbsp;</div>
        </a>
        <ul class="dropdown-menu mt-2 dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="profile.php"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;My Profile</a>
          <a class="dropdown-item" href="init.php"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Messenger</a>
          <?php
            $sql = "SELECT * FROM `profile` WHERE `username` LIKE '$username' ";
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_array($result);
            $check = mysqli_num_rows($result);
            if($check >= 1)
            {
              $sn = $data['sn'];
              echo "<a class='dropdown-item' href='editprofile.php?id=$sn'><i class='fas fa-pencil-alt' aria-hidden='true'></i>&nbsp;&nbsp;Edit Profile</a>";
            }
            else{
              echo "<a class='dropdown-item' href='editprofile.php'><i class='fas fa-pencil-alt' aria-hidden='true'></i>&nbsp;&nbsp;Edit Profile</a>";
            }
          ?>
          <a class="dropdown-item" href="changepass.php"><i class="fa fa-unlock-alt" aria-hidden="true"></i>&nbsp;&nbsp;Change Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="sessionOut.php">Sign Out&nbsp;&nbsp;<i class="fa fa-sign-out-alt" aria-hidden="true"></i></a>
        </ul>
      </li>
    </ul>
  </div>
</nav>


  <!-- bootstrap carousel slider -->
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4">Namaste Chatting Website</h2>
            <p class="lead">Created by Yogesh Giri.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4">User Profile Creation</h2>
            <p class="lead">Create your beautiful profile.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4">Real Time Group Chatting</h2>
            <p class="lead">Use realtime and instant chatting feature with numbers of friends.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
  </header>
  
  <!-- Page Content -->
  <div class="container pt-5">
  <div class="card w-100">
    <div class="card-body">
    <h5 class="card-title">Introducing,</h5>
      <h2 class="card-title"><a href="#">Namaste Chatting Application</a></h2>
      <p class="card-text">
      Setup your beautiful profile. Create a group and BOOM!. Use realtime and instant chatting feature with numbers of friends.
      </p>
      <a href="init.php" class="btn btn-primary">Start Chatting</a>
    </div>
  </div>
</div>

  <div class="container">
  <div class="row">
  <div class="col-sm-6 pt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Visit your profile</h5>
        <p class="card-text">
          Visit your beautiful profile. Upload profile picture, edit your details, change password and many more.
        </p>
        <a href="profile.php" class="btn btn-primary">My Profile</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 pt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Create a chat group</h5>
        <p class="card-text">
         Create a new group now and use realtime and instant chatting feature with any numbers of friends.
        </p>
        <a href="init.php" class="btn btn-primary">Create Group</a>
      </div>
    </div>
  </div>
</div>
</div>

  <section class="section mt-5 mb-5 p-3">
  <div class="container card p-4">
  <h3 class="text-center">About Us</h3>

    <div class="row">
      <div class="col-md-6 col-lg-5 ml-auto mr-auto d-flex align-items-center mt-4 mt-md-0">
        <div>
          <img alt="developer" style="clip-path: circle(45%);" class="col-md-7 col-lg-6 ml-auto mr-auto d-flex align-items-center" src="img/MyPic4.jpg"  />
        </div>
      </div>
      <div class="col-md-6 col-lg-5 ml-auto mr-auto d-flex align-items-center mt-4 mt-md-0">
        <div class="pl-3 pr-2">
          <h5 class="card-title">Yogesh Giri</h5>
          <p class="text-muted">Full Stack Web Developer</p>
          <p class="card-text">An enthusiastic full stack web developer from India. Always passionate about my work because, I love what I do.</p>
          <a href="https://github.com/yogeshgiri904" class="btn btn-success">Visit Profile</a>
          <a href="https://yogeshgiri904.github.io/advance_sro/" class="btn mt-1 btn-danger">Organization</a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">

    <!-- Section: Text -->
    <section class="mb-4">
      <h4>
      NAMASTE CHATTING APPLICATION
      </h4>
      <p class="pl-2 pr-2">
<i>      Setup your beautiful profile. Create a group and BOOM!. Use realtime and instant chatting feature with numbers of friends. This beautiful website is created by me, Yogesh Giri.
       An enthusiastic full stack web developer from India.</i>
      </p>
    </section>

        <!-- Section: Social media -->
        <section class="">
      <!-- Facebook -->


      <a class="btn btn-outline-light btn-floating m-1 p-2" href="profile.php" role="button"
        ><i class="fa fa-user"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1 p-2" href="init.php" role="button"
        ><i class="fa fa-envelope"></i
      ></a>
      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1 p-2" href="#" role="button"
        ><i class="fa fa-home"></i
      ></a>
      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1 p-2" href="changepass.php" role="button"
        ><i class="fa fa-unlock-alt"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1 p-2" href="sessionOut.php" role="button"
        ><i class="fa fa-sign-out-alt"></i
      ></a>
    </section>
    <!-- Section: Social media -->
</div>

  <!-- Copyright -->
  <div style="font-size:13px;" class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright |
    <a class="text-white" href="https://github.com/yogeshgiri904">Yogesh Giri</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</body>
</html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>