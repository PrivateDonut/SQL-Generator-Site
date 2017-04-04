<?php
$stattypes = "
<option value='0'>None</option>
<option value='0'>Mana</option>
<option value='1'>Health</option>
<option value='3'>Agility</option>
<option value='4'>Strength</option>
<option value='5'>Intellect</option>
<option value='6'>Spirit</option>
<option value='7'>Stamina</option>
<option value='12'>Defense Rating</option>
<option value='13'>Dodge Rating</option>
<option value='14'>Parry Rating</option>
<option value='15'>Block Rating</option>
<option value='16'>Melee Hit Rating</option>
<option value='17'>Ranged Hit Rating</option>
<option value='18'>Spell Hit Rating</option>
<option value='19'>Melee Crit Rating</option>
<option value='20'>Ranged Crit Rating</option>
<option value='21'>Spell Crit Rating</option>
<option value='22'>Melee Hit Taken Rating</option>
<option value='23'>Ranged Hit Taken Rating</option>
<option value='24'>Spell Hit Taken Rating</option>
<option value='25'>Melee Crit Taken Rating</option>
<option value='26'>Ranged Crit Taken Rating</option>
<option value='27'>Spell Crit Taken Rating</option>
<option value='28'>Melee Haste Rating</option>
<option value='29'>Ranged Haste Rating</option>
<option value='30'>Spell Haste Rating</option>
<option value='31'>Hit Rating</option>
<option value='32'>Crit Rating</option>
<option value='33'>Hit Taken Rating</option>
<option value='34'>Crit Taken Rating</option>
<option value='35'>Resilience Rating</option>
<option value='36'>Haste Rating</option>
<option value='37'>Expertise Rating</option>
<option value='38'>Attack Power</option>
<option value='39'>Ranged Attack Power</option>
<option value='41'>Spell Healing Rating</option>
<option value='42'>Spell Damage Rating</option>
<option value='43'>Mana Regeneration</option>
<option value='44'>Armor Penetration</option>
<option value='45'>Spell Power</option>
<option value='46'>Health Regeneration</option>
<option value='47'>Spell Penetration</option>
<option value='48'>Block Value</option>";
?>
<div class="col-md-9">
  <div class="panel panel-default">
    <div class="panel-heading">Create Item</div>
    <div class="panel-body">
      <form action="functions/createitem.php" autocomplete="off" method="POST" class="myform">
        <div class="inputgroup">
          <div class="inputbar">Info</div>
          <div class="inputcontent">
            <div class="form-group">
              <input type="text" name="entry" class="form-control" placeholder="Entry">
            </div>
            <div class="form-group">
              <select name="class" id="class" onchange="subclasslist()" class="form-control">
                <option value="0" selected hidden disabled>Class</option>
                <option value="2">Weapon</option>
                <option value="4">Armor</option>
              </select>
            </div>
            <div class="form-group" id="subclassgroup">
              <select name="subclass" id="subclass" class="form-control">
                <option value="0" selected hidden disabled>Subclass</option>
              </select>
            </div>
            <script type="text/javascript">
              var subclasses = {};
            	subclasses['4'] = ['Misc','Cloth', 'Leather', 'Mail', 'Plate'];
            	subclasses['2'] = ['1H Axe', '2H Axe', 'Bow', 'Gun', '1H Mace', '2H Mace', 'Polearm', '1H Sword', '2H Sword', 'Obsolete', 'Staff', 'Exotic', 'Exotic', 'Fist Weapon', 'Miscellaneous', 'Dagger', 'Thrown', 'Spear', 'Crossbow', 'Wand', 'Fishing Pole']

              function subclasslist() {
            	   var classList = document.getElementById("class");
            	   var modelList = document.getElementById("subclass");
            	   var selclass = classList.options[classList.selectedIndex].value;

            	   while (modelList.options.length) {
            		     modelList.remove(0);
            		 }

            	   var classe = subclasses[selclass];

            	   if (classe) {
            		     var i;
            		     for (i = 0; i < classe.length; i++) {
            				       var car = new Option(classe[i], i);
            				       modelList.options.add(car);
            			   }
            		 }

               }
            </script>
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="display" placeholder="DisplayID">
            </div>
            <div class="form-group">
              <select name="invtype" class="form-control">
                <option value="0" selected hidden disabled>InventoryType</option>
                <option value="1">Head</option>
                <option value="2">Neck</option>
				        <option value="3">Shoulder</option>
				        <option value="4">Shirt</option>
				        <option value="5">Chest</option>
				        <option value="6">Waist</option>
				        <option value="7">Legs</option>
				        <option value="8">Boots</option>
				        <option value="9">Bracers</option>
				        <option value="10">Gloves</option>
				        <option value="11">Ring</option>
				        <option value="12">Trinket</option>
				        <option value="13">1H Weapon</option>
				        <option value="14">Shield</option>
				        <option value="15">Bow</option>
				        <option value="16">Cloak</option>
				        <option value="17">2H Weapon</option>
				        <option value="19">Tabard</option>
				        <option value="20">Robe</option>
				        <option value="23">Held in Off-Hand</option>
				        <option value="25">Thrown</option>
				        <option value="28">Relic</option>
              </select>
            </div>
          </div>
        </div>
        <div class="inputgroup">
          <div class="inputbar">Stats</div>
          <div class="inputcontent">

            <div class="form-group">
              <input type="text" name="statval1" class="form-control" placeholder="Stat Value 1">
            </div>
            <div class="form-group">
              <select name="stattype1" class="form-control">
                <option value='0' selected hidden disabled>Stat Type 1</option>
                <?php echo $stattypes; ?>
              </select>
            </div>

            <div class="form-group">
              <input type="text" name="statval2" class="form-control" placeholder="Stat Value 2">
            </div>
            <div class="form-group">
              <select name="stattype2" class="form-control">
                <option value='0' selected hidden disabled>Stat Type 2</option>
                <?php echo $stattypes; ?>
              </select>
            </div>

            <div class="form-group">
              <input type="text" name="statval3" class="form-control" placeholder="Stat Value 3">
            </div>
            <div class="form-group">
              <select name="stattype3" class="form-control">
                <option value='0' selected hidden disabled>Stat Type 3</option>
                <?php echo $stattypes; ?>
              </select>
            </div>

            <div class="form-group">
              <input type="text" name="statval4" class="form-control" placeholder="Stat Value 4">
            </div>
            <div class="form-group">
              <select name="stattype4" class="form-control">
                <option value='0' selected hidden disabled>Stat Type 4</option>
                <?php echo $stattypes; ?>
              </select>
            </div>

            <div class="form-group">
              <input type="text" name="statval5" class="form-control" placeholder="Stat Value 5">
            </div>
            <div class="form-group">
              <select name="stattype5" class="form-control">
                <option value='0' selected hidden disabled>Stat Type 5</option>
                <?php echo $stattypes; ?>
              </select>
            </div>

            <div class="form-group">
              <input type="text" name="statval6" class="form-control" placeholder="Stat Value 6">
            </div>
            <div class="form-group">
              <select name="stattype6" class="form-control">
                <option value='0' selected hidden disabled>Stat Type 6</option>
                <?php echo $stattypes; ?>
              </select>
            </div>

            <div class="form-group">
              <input type="text" name="statval7" class="form-control" placeholder="Stat Value 7">
            </div>
            <div class="form-group">
              <select name="stattype7" class="form-control">
                <option value='0' selected hidden disabled>Stat Type 7</option>
                <?php echo $stattypes; ?>
              </select>
            </div>

            <div class="form-group">
              <input type="text" name="statval8" class="form-control" placeholder="Stat Value 8">
            </div>
            <div class="form-group">
              <select name="stattype8" class="form-control">
                <option value='0' selected hidden disabled>Stat Type 8</option>
                <?php echo $stattypes; ?>
              </select>
            </div>

            <div class="form-group">
              <input type="text" name="statval9" class="form-control" placeholder="Stat Value 9">
            </div>
            <div class="form-group">
              <select name="stattype9" class="form-control">
                <option value='0' selected hidden disabled>Stat Type 9</option>
                <?php echo $stattypes; ?>
              </select>
            </div>

            <div class="form-group">
              <input type="text" name="statval10" class="form-control" placeholder="Stat Value 10">
            </div>
            <div class="form-group">
              <select name="stattype10" class="form-control">
                <option value='0' selected hidden disabled>Stat Type 10</option>
                <?php echo $stattypes; ?>
              </select>
            </div>
          </div>

        </div>
        <input type="submit" style="display:block;margin:10px auto 0 auto;" class="btn btn-success" value="Create Item">
      </form>
    </div>
  </div>
</div>
