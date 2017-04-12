<div class="col-md-3">
  <div class="panel panel-default">
    <div class="panel-heading">Toolbox</div>
    <div class="panel-body">
      <?php
      if(isset($_GET['p'])) {
        if($_GET['p'] == "item") {
          echo "<div id=\"dispmenu1\" data-toggle=\"modal\" style=\"outline:none;\" data-target=\"#dispModal\">Item DisplayID Finder</div>";
        }elseif($_GET['p'] == "creature") {
          echo "<div id=\"dispmenu1\" data-toggle=\"modal\" style=\"outline:none;\" data-target=\"#modelModal\">Creature ModelID Finder</div>";
        }elseif($_GET['p'] == "vendor") {
          // do nothing yet
        }
      }
      ?>
    </div>
  </div>
</div>
