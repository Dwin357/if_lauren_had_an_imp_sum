<div class='container-fluid'>
  <?php 
    foreach($content as $sections) {
      echo "<div class='panel panel-default'>";
      foreach($sections as $section){
        
        echo $section;
      }
      echo "</div>";
    }
  ?>
</div>