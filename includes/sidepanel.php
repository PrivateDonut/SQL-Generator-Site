<div class="col-md-3">
  <div class="panel panel-default">
    <div class="panel-heading">Toolbox</div>
    <div class="panel-body">
      <?php
      if(isset($_GET['p'])) {
        if($_GET['p'] == "item") {
          echo "<div id=\"dispmenu1\" data-toggle=\"modal\" style=\"outline:none;\" data-target=\"#dispModal\">DisplayID Finder</div>";
        }elseif($_GET['p'] == "creature") {
          // do nothing yet
        }elseif($_GET['p'] == "vendor") {
          // do nothing yet
        }
      }
      ?>
    </div>
  </div>
</div>
