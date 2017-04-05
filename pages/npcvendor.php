<div class="col-md-9">
  <div class="panel panel-default">
    <div class="panel-heading">Create NPC Vendor</div>
    <div class="panel-body">
    <form action="functions/npcvendor.php" autocomplete="off" method="POST" class="myform">
        <div class="inputgroup">
          <!-- Create NPC Vendor -->
            <div class="form-group">
              <input type="text" name="entry" class="form-control" placeholder="NPC Entry">
            </div>
            <div class="form-group">
              <input type="text" name="modelid1" class="form-control" placeholder="NPC Model ID #1">
            </div>
            <div class="form-group">
              <input type="text" name="modelid2" class="form-control" placeholder="NPC Model ID #2">
            </div>
            <div class="form-group">
              <input type="text" name="cName" class="form-control" placeholder="NPC Name">
            </div>
            <div class="form-group">
              <input type="text" name="subname" class="form-control" placeholder="NPC SubName">
            </div>
            <div class="form-group">
              <input type="text" name="maxlevel" class="form-control" placeholder="NPC Level">
            </div>
            <div class="form-group">
              <input type="hidden" name="npcflag" class="form-control" value="129">
            </div>

        <input type="submit" class="btn btn-success" style="display:block;margin:10px auto 0 auto;" value="Create Item">
      </form>

      </div>
    </div>
  </div>
</div>
