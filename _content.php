<div class='container-fluid'>
  <?php 
    foreach($content as $sections) {
      echo "<div class='panel panel-default'>";
      foreach($sections as $category => $content){
        if($category == "header") {
          echo "<div class='pannel-heading'>";
          echo $content;
          echo "</div>";
        } elseif ($category == "body") {
          echo "<div class='panel-body'>";
          echo $content;
          echo "</div>";
        }
      }
      echo "</div>";
    }
  ?>
</div>