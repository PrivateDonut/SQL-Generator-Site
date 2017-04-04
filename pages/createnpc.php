<?php
$npcrank = "
<option value='0'>Normal</option>
<option value='1'>Elite</option>
<option value='2'>Rare Elite</option>
<option value='3'>Boss</option>
<option value='4'>Rare</option>"
 ?>
<?php
$dmgschool = "
<option value='0'>Spell School Normal</option>
<option value='1'>Spell School Holy</option>
<option value='2'>Spell School Fire</option>
<option value='3'>Spell School Nature</option>
<option value='4'>Spell School Frost</option>
<option value='5'>Spell School Shadow</option>
<option value='6'>Spell School Arcane</option>"
 ?>

<div class="col-md-9">
  <div class="panel panel-default">
    <div class="panel-heading">Create Create</div>
    <div class="panel-body">
      <form action="functions/createnpc.php" autocomplete="off" method="POST" class="myform">
        <div class="inputgroup">
          <!-- Creature Information -->
          <div class="inputbar">Creature Information</div>
          <div class="inputcontent">
            <div class="form-group">
              <input type="text" name="entry" class="form-control" placeholder="NPC Entry">
            </div>
            <div class="form-group">
              <input type="text" name="cName" class="form-control" placeholder="NPC Name">
            </div>
            <div class="form-group">
              <input type="text" name="cSubname" class="form-control" placeholder="NPC SubName">
            </div>
            <div class="form-group">
              <input type="text" name="minlevel" class="form-control" placeholder="NPC Min Level">
            </div>
            <div class="form-group">
              <input type="text" name="maxlevel" class="form-control" placeholder="NPC Max Level">
            </div>
            <div class="form-group">
              <input type="text" name="faction" class="form-control" placeholder="NPC Faction">
            </div>
      </div>
  </div>

  <div class="inputgroup">
    <!-- Creature Module -->
    <div class="inputbar">Creature Module</div>
    <div class="inputcontent">
      <div class="form-group">
        <div class="form-group">
          <input type="text" name="modelid1" class="form-control" placeholder="Creature Model #1">
        </div>

        <div class="form-group">
          <input type="text" name="modelid2" class="form-control" placeholder="Creature Model #2">
        </div>

        <div class="form-group">
          <input type="text" name="modelid3" class="form-control" placeholder="Creature Model #3">
        </div>

        <div class="form-group">
          <input type="text" name="modelid4" class="form-control" placeholder="Creature Model #4">
        </div>
      </div>
</div>
</div>
        <input type="submit" style="display:block;margin:10px auto 0 auto;" class="btn btn-success" value="Create Item">
      </form>
    </div>
  </div>
</div>
