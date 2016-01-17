<div class='container-fluid content-container'>
  <?php 
    foreach($content as $sections) {
      echo "<div class='panel panel-primary'>";
      foreach($sections as $category => $content){
        // if images are added, this is a good spot for a switch
        if($category == "header") {
          echo "<div class='panel-heading'>".$content."</div>";
        } elseif ($category == "body") {
          echo "<div class='panel-body'>".$content."</div>";
        }
      }
      echo "</div>";
    }
  ?>
</div>