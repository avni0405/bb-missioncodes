<!DOCTYPE html>
 
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
    $(document).ready(function () {    
      $('.carousel').carousel({
          interval: 3000
      });    
    $('.carousel').carousel('cycle');
    });
    
    $(document).ready(function () {    
      $('#rides .carousel').carousel({
          interval: 3000
      });    
    $('#rides .carousel').carousel('cycle');
    });
    $('#carousel-example').on('slide.bs.carousel', function (e) {

      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 5;
      var totalItems = $('.carousel-item').length;
  
      if (idx >= totalItems-(itemsPerSlide-1)) {
          var it = itemsPerSlide - (totalItems - idx);
          for (var i=0; i<it; i++) {
              // append slides to end
              if (e.direction=="left") {
                  $('.carousel-item').eq(i).appendTo('.carousel-inner');
              }
              else {
                  $('.carousel-item').eq(0).appendTo('.carousel-inner');
              }
          }
      }
  });
  $(document).ready(function () {
$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });
});
    </script>
  </head>
  <body>
    <!-- nav bar -->
    <nav id="navid" class="navbar  shift navbar-dark navbar-expand-lg nav-bk sticky-top" >
      <a class ="navbar-brand" href="index.php">
        <img src="image/logo.png" alt="no image" style="padding-bottom:0px;"height="90px" width="80px" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <ul class=" nav navbar-nav navbar-right ml-auto" >
          <li class="nav-item  font-weight-bold">
            <a class="nav-link text-dark  "  href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown mr-sm-2 ">
            <!-- <a class="nav-link text-dark font-weight-bold dropdown-toggle"  aria-haspopup="true" aria-expanded="false  data-toggle="dropdown" href="#">Park Beauty -->
            <a class="nav-link dropdown-toggle text-dark font-weight-bold" data-toggle="dropdown" id="Preview" href="#"  >
              Rides
            </a>
            <div class="dropdown-menu " >
              <a href="wormholl.php"  class="dropdown-item">Worm Holl</a>
              <a href="watercoster.php" class="dropdown-item">Water Coster</a>
              <a href="skyscraper.php" class="dropdown-item">Sky Scraper</a>
              <a href="thriller.php" class="dropdown-item">Thriller</a>
              <a href="crazybucket.php" class="dropdown-item">Crazy Bucket</a>
              <a href="aquavolcano.php" class="dropdown-item">Aqua Volcano</a>
              <a href="kidzone.php" class="dropdown-item">Kid Zone</a>
              <a href="valvetthunder.php" class="dropdown-item">Valvet Thunder</a>
              <a href="pendulum.php" class="dropdown-item">Pendulum</a>
              
            </div>
            <!-- <div class="dropdown-menu">
              
           
            </div> -->
          </li>
          <li class="nav-item dropdown mr-sm-2">
            <!-- <a class="nav-link text-dark font-weight-bold dropdown-toggle"  aria-haspopup="true" aria-expanded="false  data-toggle="dropdown" href="#">Park Beauty -->
            <a class="nav-link dropdown-toggle text-dark font-weight-bold" data-toggle="dropdown" id="Preview" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              Park Beauty
            </a>
            <div class="dropdown-menu" aria-labelledby="Preview">
              <a href="food.php"  class="dropdown-item">Unlimited Food</a>
              <a href="pool.php" class="dropdown-item">Jumbo Pool</a>
              <a href="dance.php" class="dropdown-item">Rain Dance</a>
              <a href="relex.php" class="dropdown-item">Relaxing Area</a>
              <a href="fun.php" class="dropdown-item">Fun Center & Arcade</a>
              <a href="kid.php" class="dropdown-item">Kidzon</a>
              <a href="horror.php" class="dropdown-item">Horror Tunnel</a>
            </div>
            <!-- <div class="dropdown-menu">
              
           
            </div> -->
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark font-weight-bold" href="tickets.php">Tickets & Offers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark font-weight-bold " href="booknow.php">Book Now</a>
          </li>
          <li class="nav-item my-2 my-sm-0">
            <a class="nav-link text-dark font-weight-bold " href="dest.php">Your Fun destinations is here..</a>
          </li>
        </ul>
      </div>
    </nav>
    <ul class="ct-socials">
  <li>
    <a href="https://www.instagram.com/bluebubblewaterpark/" target="_blank"><i class="fa fa-instagram"></i></a>
  </li>
  <li>
    <a href="https://www.facebook.com/bluebubblewaterpark/" target="_blank"><i class="fa fa-facebook"></i></a>
  </li>
  <li>
    <a href="booking@bluebubblewaterpark.com" target="_blank"><i class="fa fa-envelope"></i></a>
  </li>
  <li>
    <a href="https://www.youtube.com/watch?v=OJI3KdfyYpI&feature=youtu.be" target="_blank"><i class="fa fa-youtube"></i></a>
  </li>
 
</ul>
</body>
</html>