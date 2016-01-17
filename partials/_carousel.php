<?php
  $tower      = array("indicator"=>"", "list"=>"class='item content-container'");
  $world      = array("indicator"=>"", "list"=>"class='item content-container'");
  $fool       = array("indicator"=>"", "list"=>"class='item content-container'");
  $index      = array("indicator"=>"", "list"=>"class='item content-container'");
  $hierophant = array("indicator"=>"", "list"=>"class='item content-container'");

  switch ($page) {
    case "tower":
      $tower = array("list"=>"class='item active content-container'");
      $nav_options = array("next"=>"world.php", "prev"=>"hierophant.php");
      break;
    case "world":
      $world = array("list"=>"class='item active content-container'");
      $nav_options = array("next"=>NULL, "prev"=>"tower.php");
      break;
    case "fool":
      $fool = array("list"=>"class='item active content-container'");
      $nav_options = array("next"=>"hierophant.php", "prev"=>"index.php");
      break;
    case "index":
      $index = array("list"=>"class='item active content-container'");
      $nav_options = array("next"=>"fool.php", "prev"=>NULL);
      break;
    case "hierophant":
      $hierophant = array("list"=>"class='item active content-container'");
      $nav_options = array("next"=>"tower.php", "prev"=>"fool.php");
      break;
  }
?>


<div id='story-carousel' class='carousel slide' data-ride='carousel' data-interval='false'>


  <div class="carousel-inner" role="listbox">
    <div <?php echo $tower["list"];?>>
        <!-- tower -->
      <a href="tower.php">
        <img src='images/IMG_0780.JPG' class='clock-wise-ninety'>
      </a>
    </div>

    <div <?php echo $world["list"];?>>
        <!-- trees & light -->
      <a href="world.php">
        <img src='images/IMG_0783.JPG' class='clock-wise-ninety'>
      </a>
    </div>

    <div <?php echo $fool["list"];?>>
      <!-- oval staircase -->
      <a href='fool.php'>
        <img src='images/IMG_1460.JPG' class='clock-wise-ninety'>
      </a>
    </div>

    <div <?php echo $index["list"];?>>
      <!-- city landscape -->
      <a href='index.php'>
        <img src='images/IMG_1486.JPG'>
      </a>
    </div>

    <div <?php echo $hierophant["list"];?>>
      <!-- intense look -->
      <a href='hierophant.php'>
        <img src='images/IMG_1738.JPG' class='clock-wise-ninety'>
      </a>
    </div>
  </div>

  <?php 
    if ($nav_options["prev"] != NULL) 
    { echo
      '<a class="left carousel-control" href="'.$nav_options["prev"].'" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>';
    }
    if ($nav_options["next"] != NULL)
    { echo
      '<a class="right carousel-control" href="'.$nav_options["next"].'" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>';
    }
  ?>
</div>