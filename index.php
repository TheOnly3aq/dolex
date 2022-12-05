<?php 
$title = "Dolex | Watches";
$slogan = "Get a watch, lose a house."
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "header.php"?>
    <title><?php echo $title?></title>
</head>
<body>
  <nav id="showhide" class="navbar showhide navbar-expand-lg fixed-top navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Dolex <strong>Watches</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" style="padding-inline: 10px;" href="/">Watches</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" style="padding-inline: 10px;" href="/chains.php">Chains</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" style="padding-inline: 10px;" href="/cart.php">Your selection</a>
          </li>
        </ul>
      </div>
      </div>
  </nav>



  <div class="homepage" >
  <video  class="videovroom" autoplay muted loop id="myVideo">
    <source src="hub-collection-watches-cover.mp4"  type="video/mp4">
  </video>
  <div class="header-text" >
  <p>DOLEX WATCHES</p>
  <h1>THE COLLECTION</h1>
  </div>
</div>

<?php
// $bedrag = '&euro;&nbsp;';
$item = array();
$item[0] = ["title" => "The Gold Boi MKII", "afb" => "/goldboy.png", "prijs" => 60000, "btntext" => "Add to cart"];
$item[1] = ["title" => "Dual color Dolex", "afb" => "/duelcolor.jpg", "prijs" => 12500, "btntext" => "Add to cart"];
$item[2] = ["title" => "Fancy Dolex", "afb" => "/fancy.jpeg", "prijs" => 35000, "btntext" => "Add to cart"];
// $prijs = $item['prijs'];
// $bedrag = number_format($prijs, 2, ',', '.');
echo "</pre>";
?>
<div class="kaarten" >
  <div class="row row-cols-1 row-cols-md-3 g-4">
<?php
$teller=0;
while($teller < count($item)){
echo "<div class='col'>";
echo "<div class='card h-100'>";
echo "<img src='/img{$item[$teller]["afb"]}' class='kaarts goldboyimg card-img-top kaart' alt='..'>";;
echo "<div class='card-body'>";
echo "<h2 class='card-title'>{$item[$teller]['title']}</h2>";
echo "<h3 class='card-text'>{$item[$teller]['prijs']}</h3>";
echo "<a href='#' class='btn btn-primary'>{$item[$teller]['btntext']}</a>";
echo "</div>";
echo "</div>";
echo "</div>";
$teller++;
}
?>
</div>
  </div>


<!-- <div class="kaarten" >
  <div class="row row-cols-1 row-cols-md-3 g-4">

      <?php
      $title = "The Gold Boi MKII";
      $image = "/img/goldboy.png";
      $prijs = 60000;
      $vooraad = 9;
      $bedrag = '&euro;&nbsp;';
      ?>

      <div class="col">
        <div class="card h-100">
          <img src="<?= $image ?>" class="kaarts goldboyimg card-img-top" alt="The Gold Boi MKII">
          <div class="card-body">
            <h2 class="card-title"><?= $title ?></h2>
            <h3 class="card-text"><?= $bedrag . number_format($prijs, 2, ',', '.');?></h3>
            <?php if($vooraad < 10): ?>
                <p class="card-text orderfast" >Snel bestellen, beperkte vooraad</p>
            <?php endif; ?>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
      <?php
      $title = "Duel color Dolex";
      $image = "/img/duelcolor.jpg";
      $prijs = 12120;
      $vooraad = 20;
      $bedrag = '&euro;&nbsp;';
      ?>
      <div class="col">
        <div class="card h-100">
          <img src="<?php echo $image?>" class="kaarts card-img-top" alt="Dual color Dolex">
          <div class="card-body">
            <h2 class="card-title"><?php echo $title?></h2>
            <h3 class="card-text"> <?php echo $bedrag; echo number_format($prijs, 2, ',', '.');?></h3>
            <?php if($vooraad < 10): ?>
                <p class="card-text orderfast" >Snel bestellen, beperkte vooraad</p>
            <?php endif; ?>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
      <?php
      $title = "Fancy Dolex";
      $image = "/img/fancy.jpeg";
      $prijs = 35000;
      $vooraad = 20;
      $bedrag = '&euro;&nbsp;';
      ?>
      <div class="col">
        <div class="card h-100">
          <img src="<?php echo $image?>" class="kaarts card-img-top" alt="Fancy Dolex">
          <div class="card-body">
            <h2 class="card-title"><?php echo $title?></h2>
            <h3 class="card-text"><?php echo $bedrag; echo number_format($prijs, 2, ',', '.');?></h3>
            <?php if($vooraad < 10): ?>
                <p class="card-text orderfast" >Snel bestellen, beperkte vooraad</p>
            <?php endif; ?>
            <a href="#" class="btn btn-primary">Add to cart</a>
          </div>
        </div>
      </div>
    </div>
  </div> -->

<?php include "footer.php" ?>

</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </html>
