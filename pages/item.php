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
          <!-- Item Information Start -->
          <div class="inputgroup">
            <div class="inputbar">Item Information</div>
            <div class="inputcontent">
              <div class="form-group">
                <input type="text" name="entry" class="form-control" placeholder="Item Entry" required>
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
                  <option value="0" selected hidden disabled>Item Subclass</option>
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
                <input type="text" class="form-control" name="name" placeholder="Item Name" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="displayid" placeholder="Item DisplayID" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="requiredlevel" placeholder="Item Required Level">
              </div>
              <div class="form-group">
                <select name="quality" id="quality" class="form-control">
                  <option value="0" selected hidden disabled>Item Quality</option>
                  <option value="0">Poor</option>
                  <option value="1">Common</option>
                  <option value=2>Uncommon</option>
                  <option value="3">Rare</option>
                  <option value="4">Epic</option>
                  <option value="5">Legendary</option>
                  <option value="6">Artifact</option>
                  <option value="7">Bind to Account</option>
                </select>
              </div>
              <div class="form-group">
                <select class="form-control" name="bonding">
                  <option value="0" selected hidden disabled>Item Bounding</option>
                  <option value="0">No bounds</option>
                  <option value="1">Binds when picked up</option>
                  <option value=2>Binds when equipped</option>
                  <option value="3">Binds when used</option>
                </select>
              </div>
              <div class="form-group">
                <input type="text" name="BuyCount" class="form-control" placeholder="Item Buy Count">
              </div>
              <div class="form-group">
                <input type="text" name="SellPrice" class="form-control" placeholder="Item Sell Price (Gold)">
              </div>
              </div>
            </div>
          <!-- Item Information Ends -->

          <!-- Item Flags Start -->
          <div class="inputgroup">
            <div class="inputbar">Item Flags</div>
            <div class="inputcontent">
              <div class="form-group">
                <select name="Flags" id="Flags" class="form-control">
                  <option value="0" selected hidden disabled>Item Flag</option>
                  <option value="2">Conjured Item</option>
                  <option value="4">Openable Item</option>
                  <option value="8">Heroic Item</option>
                  <option value="16">Deprecated Item</option>
                  <option value="32">Can Not Be Destroyed</option>
                  <option value="128">No Default Cooldown</option>
                  <option value="512">Wrap Item</option>
                  <option value="2048">Party Loot</option>
                  <option value="4096">Item Refundable</option>
                  <option value="524288">Unique Equipped</option>
                  <option value="2097152">Can Be Used In Arena</option>
                  <option value="8388608">Can Be Used In Shapeshift Form</option>
                  <option value="67108864">Item Cannot Be Used In Arena</option>
                  <option value="536870912">Mailable</option>
                </select>
              </div>

              <div class="form-group">
                <select name="FlagsExtra" id="FlagsExtra" class="form-control">
                  <option value="0" selected hidden disabled>Item FlagsExtra</option>
                  <option value="2">Horde Only</option>
                  <option value="2">Alliance Only</option>
                  <option value="2">ExtendedCost - Gold Also Required</option>
                  <option value="2">Need Roll Disabled</option>
                  <option value="2">Normal Price</option>
                  <option value="2">bNet Account Bound</option>
                  <option value="2">Can't Be Transmog</option>
                  <option value="2">Can Transmog</option>
                </select>
              </div>
            </div>
          </div>
          <!-- Item Flags End -->

          <!-- Item Weapon Information -->
          <div class="inputgroup">
            <div class="inputbar">Weapon Information</div>
            <div class="inputcontent">
              <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" name="dps" class="form-control" placeholder="Damage Per Second">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="range" placeholder="Bow Range">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="delay" placeholder="Delay">
                      </div>
                      <div class="form-group">
                        <select name="sheath" class="form-control">
                          <option value='0' selected hidden disabled>Ammo</option>
                          <option value="2">Arrows</option>
                          <option value="3">Bullets</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <select name="ammo" class="form-control">
                        <option value='0' selected hidden disabled>Sheath</option>
                        <option value="1">Two Handed Weapon</option>
                        <option value="2">Staff</option>
                        <option value="3">One Handed</option>
                        <option value="4">Shield</option>
                        <option value="6">Off hand</option>
                      </select>
                    </div>
                  </div>
            </div>
          <!-- Item Information End -->

          <!-- Start Spell Information-->
          <div class="inputgroup">
            <div class="inputbar">Item Spell Information</div>
            <div class="inputcontent">
              <div class="panel-body">
                   <div class="col-sm-3">

                     <div class="form-group">
                       <input type="text" name="spellid1" class="form-control" placeholder="SpellId 1">
                     </div>

                     <div class="form-group">
                       <select name="spelltrig1" class="form-control">
                         <option value="0" selected hidden disabled>Trigger 1</option>
                         <option value="0">Use</option>
                         <option value="1">On Equip</option>
                         <option value="2">Chance on Hit</option>
                         <option value="5">Use with No Delay</option>
                       </select>
                     </div>

                     <div class="form-group">
                       <input type="text" name="spellcharge1" class="form-control" placeholder="Charges 1">
                     </div>

                     <div class="form-group">
                       <input type="text" name="spellppm1" class="form-control" placeholder="PPMRate 1">
                     </div>

                     <div class="form-group">
                       <input type="text" name="spellcd1" class="form-control" placeholder="SpellCD 1">
                     </div>

                   </div>
                   <div class="col-sm-2">

                     <div class="form-group">
                       <input type="text" name="spellid2" class="form-control" placeholder="SpellId 2">
                     </div>

                     <div class="form-group">
                       <select name="spelltrig2" class="form-control">
                         <option value="0" selected hidden disabled>Trigger 2</option>
                         <option value="0">Use</option>
                         <option value="1">On Equip</option>
                         <option value="2">Chance on Hit</option>
                         <option value="5">Use with No Delay</option>
                       </select>
                     </div>

                     <div class="form-group">
                       <input type="text" name="spellcharge2" class="form-control" placeholder="Charges 2">
                     </div>

                     <div class="form-group">
                       <input type="text" name="spellppm2" class="form-control" placeholder="PPMRate 2">
                     </div>

                     <div class="form-group">
                       <input type="text" name="spellcd2" class="form-control" placeholder="SpellCD 2">
                     </div>

                   </div>
                   <div class="col-sm-2">

                     <div class="form-group">
                       <input type="text" name="spellid3" class="form-control" placeholder="SpellId 3">
                     </div>

                     <div class="form-group">
                       <select name="spelltrig3" class="form-control">
                         <option value="0" selected hidden disabled>Trigger 3</option>
                         <option value="0">Use</option>
                         <option value="1">On Equip</option>
                         <option value="2">Chance on Hit</option>
                         <option value="5">Use with No Delay</option>
                       </select>
                     </div>

                     <div class="form-group">
                       <input type="text" name="spellcharge3" class="form-control" placeholder="Charges 3">
                     </div>

                     <div class="form-group">
                       <input type="text" name="spellppm3" class="form-control" placeholder="PPMRate 3">
                     </div>

                     <div class="form-group">
                       <input type="text" name="spellcd3" class="form-control" placeholder="SpellCD 3">
                     </div>

                   </div>
                   <div class="col-sm-2">

                     <div class="form-group">
                       <input type="text" name="spellid4" class="form-control" placeholder="SpellId 4">
                     </div>

                     <div class="form-group">
                       <select name="spelltrig4" class="form-control">
                         <option value="0" selected hidden disabled>Trigger 4</option>
                         <option value="0">Use</option>
                         <option value="1">On Equip</option>
                         <option value="2">Chance on Hit</option>
                         <option value="5">Use with No Delay</option>
                       </select>
                     </div>

                     <div class="form-group">
                       <input type="text" name="spellcharge4" class="form-control" placeholder="Charges 4">
                     </div>

                     <div class="form-group">
                       <input type="text" name="spellppm4" class="form-control" placeholder="PPMRate 4">
                     </div>

                     <div class="form-group">
                       <input type="text" name="spellcd4" class="form-control" placeholder="SpellCD 4">
                     </div>

                   </div>
                   <div class="col-sm-3">

                     <div class="form-group">
                       <input type="text" name="spellid5" class="form-control" placeholder="SpellId 5">
                     </div>

                     <div class="form-group">
                       <select name="spelltrig5" class="form-control">
                         <option value="0" selected hidden disabled>Trigger 5</option>
                         <option value="0">Use</option>
                         <option value="1">On Equip</option>
                         <option value="2">Chance on Hit</option>
                         <option value="5">Use with No Delay</option>
                       </select>
                     </div>

                     <div class="form-group">
                       <input type="text" name="spellcharge5" class="form-control" placeholder="Charges 5">
                     </div>

                     <div class="form-group">
                       <input type="text" name="spellppm5" class="form-control" placeholder="PPMRate 5">
                     </div>

                     <div class="form-group">
                       <input type="text" name="spellcd5" class="form-control" placeholder="SpellCD 5">
                     </div>
                   </div>
                 </div>
               </div>
            </div>
          <!-- End -->

          <!-- Item Stats Start -->
          <div class="inputgroup">
    <div class="inputbar">Stats</div>
    <div class="inputcontent">
      <div class="col-sm-6">
        <div class="form-group">
          <input type="text" name="statval1" class="form-control" placeholder="Stat Value 1">
        </div>
        <div class="form-group">
          <input type="text" name="statval2" class="form-control" placeholder="Stat Value 2">
        </div>
        <div class="form-group">
          <input type="text" name="statval3" class="form-control" placeholder="Stat Value 3">
        </div>
        <div class="form-group">
          <input type="text" name="statval4" class="form-control" placeholder="Stat Value 4">
        </div>
        <div class="form-group">
          <input type="text" name="statval5" class="form-control" placeholder="Stat Value 5">
        </div>
        <div class="form-group">
          <input type="text" name="statval6" class="form-control" placeholder="Stat Value 6">
        </div>
        <div class="form-group">
          <input type="text" name="statval7" class="form-control" placeholder="Stat Value 7">
        </div>
        <div class="form-group">
          <input type="text" name="statval8" class="form-control" placeholder="Stat Value 8">
        </div>
        <div class="form-group">
          <input type="text" name="statval9" class="form-control" placeholder="Stat Value 9">
        </div>
        <div class="form-group">
          <input type="text" name="statval10" class="form-control" placeholder="Stat Value 10">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <select name="stattype1" class="form-control">
            <option value='0' selected hidden disabled>Stat Type 1</option>
            <?php echo $stattypes; ?>
          </select>
        </div>

        <div class="form-group">
          <select name="stattype2" class="form-control">
            <option value='0' selected hidden disabled>Stat Type 2</option>
            <?php echo $stattypes; ?>
          </select>
        </div>

        <div class="form-group">
          <select name="stattype3" class="form-control">
            <option value='0' selected hidden disabled>Stat Type 3</option>
            <?php echo $stattypes; ?>
          </select>
        </div>

        <div class="form-group">
          <select name="stattype4" class="form-control">
            <option value='0' selected hidden disabled>Stat Type 4</option>
            <?php echo $stattypes; ?>
          </select>
        </div>

        <div class="form-group">
          <select name="stattype5" class="form-control">
            <option value='0' selected hidden disabled>Stat Type 5</option>
            <?php echo $stattypes; ?>
          </select>
        </div>

        <div class="form-group">
          <select name="stattype6" class="form-control">
            <option value='0' selected hidden disabled>Stat Type 6</option>
            <?php echo $stattypes; ?>
          </select>
        </div>

        <div class="form-group">
          <select name="stattype7" class="form-control">
            <option value='0' selected hidden disabled>Stat Type 7</option>
            <?php echo $stattypes; ?>
          </select>
        </div>

        <div class="form-group">
          <select name="stattype8" class="form-control">
            <option value='0' selected hidden disabled>Stat Type 8</option>
            <?php echo $stattypes; ?>
          </select>
        </div>

        <div class="form-group">
          <select name="stattype9" class="form-control">
            <option value='0' selected hidden disabled>Stat Type 9</option>
            <?php echo $stattypes; ?>
          </select>
        </div>

        <div class="form-group">
          <select name="stattype10" class="form-control">
            <option value='0' selected hidden disabled>Stat Type 10</option>
            <?php echo $stattypes; ?>
          </select>
        </div>

      </div>
    </div>
  </div>
  <!-- Item Stats End -->

  <!-- Race / Class Start -->
  <div class="inputgroup">
    <div class="inputbar">Race / Class</div>
    <div class="inputcontent">
      <table class="table table-bordered">
        <tr>
          <th colspan="10"><center>Allowable Class</center></th>
        </tr>
        <tr>
          <td><label for="warrior">Warrior</label></td>
          <td><input id="warrior" class="class" value="1" type="checkbox" name="AllowableClass[]"></td>
          <td><label for="paladin">Paladin</label></td>
          <td><input id="paladin" class="class" value="2" type="checkbox" name="AllowableClass[]"></td>
          <td><label for="hunter">Hunter</label></td>
          <td><input id="hunter" class="class" value="4" type="checkbox" name="AllowableClass[]"></td>
          <td><label for="rogue">Rogue</label></td>
          <td><input id="rogue" class="class" value="8" type="checkbox" name="AllowableClass[]"></td>
          <td><label for="priest">Priest</label></td>
          <td><input id="priest" class="class" value="16" type="checkbox" name="AllowableClass[]"></td>
        </tr>
        <tr>
          <td><label for="dk">Death Knight</label></td>
          <td><input id="dk" class="class" value="32" type="checkbox" name="AllowableClass[]"></td>
          <td><label for="shaman">Shaman</label></td>
          <td><input id="shaman" class="class" value="64" type="checkbox" name="AllowableClass[]"></td>
          <td><label for="mage">Mage</label></td>
          <td><input id="mage" class="class" value="128" type="checkbox" name="AllowableClass[]"></td>
          <td><label for="warlock">Warlock</label></td>
          <td><input id="warlock" class="class" value="256" type="checkbox" name="AllowableClass[]"></td>
          <td><label for="druid">Druid</label></td>
          <td><input id="druid" class="class" value="1024" type="checkbox" name="AllowableClass[]"></td>
        </tr>
        <tr>
          <td colspan="5"><center><label for="allclasses">All Classes</label></center></td>
          <td colspan="5"><input type="checkbox" id="allclasses" class="allclasses"></td>
        </tr>
      </table>
      <table class="table table-bordered">
        <tr>
          <th colspan="10"><center>Allowable Race</center></th>
        </tr>
        <tr>
          <td><label for="human">Human</label></td>
          <td><input id="human" class="alliance allowrace" value="1" type="checkbox" name="AllowableRace[]"></td>
          <td><label for="orc">Orc</label></td>
          <td><input id="orc" class="horde allowrace" value="2" type="checkbox" name="AllowableRace[]"></td>
          <td><label for="dwarf">Dwarf</label></td>
          <td><input id="dwarf" class="alliance allowrace" value="4" type="checkbox" name="AllowableRace[]"></td>
          <td><label for="nightelf">Night Elf</label></td>
          <td><input id="nightelf" class="alliance allowrace" value="8" type="checkbox" name="AllowableRace[]"></td>
          <td><label for="undead">Undead</label></td>
          <td><input id="undead" class="horde allowrace" value="16" type="checkbox" name="AllowableRace[]"></td>
        </tr>
        <tr>
          <td><label for="tauren">Tauren</label></td>
          <td><input id="tauren" class="horde allowrace" value="32" type="checkbox" name="AllowableRace[]"></td>
          <td><label for="gnome">Gnome</label></td>
          <td><input id="gnome" class="alliance allowrace" value="64" type="checkbox" name="AllowableRace[]"></td>
          <td><label for="troll">Troll</label></td>
          <td><input id="troll" class="horde allowrace" value="128" type="checkbox" name="AllowableRace[]"></td>
          <td><label for="bloodelf">Blood Elf</label></td>
          <td><input id="bloodelf" class="horde allowrace" value="512" type="checkbox" name="AllowableRace[]"></td>
          <td><label for="draenei">Draenei</label></td>
          <td><input id="draenei" class="alliance allowrace" value="1024" type="checkbox" name="AllowableRace[]"></td>
        </tr>
        <tr>
          <td colspan="5"><center><label for="allhordes">All Hordes</label></center></td>
          <td colspan="5"><input type="checkbox" id="allhordes" class="allhordes"></td>
        </tr>
        <tr>
          <td colspan="5"><center><label for="allallies">All Alliances</label></center></td>
          <td colspan="5"><input type="checkbox" id="allallies" class="allallies"></td>
        </tr>
        <tr>
          <td colspan="5"><center><label for="allraces">All Races</label></center></td>
          <td colspan="5"><input type="checkbox" id="allraces" class="allraces"></td>
        </tr>
      </table>
          </div>
    </div>
  <!-- Race / Class End -->
  <!-- socket list start -->
  <div class="inputgroup">
    <div class="inputbar">Item Sockets</div>
    <div class="inputcontent">
      <table class="table table-bordered">
                            <tr>
                              <td colspan="8">Socket1</td>
                            </tr>
                            <tr>
                              <td><label for="meta1">Meta</label></td>
                              <td><input type="radio" id="meta1" name="socketColor_1" value="1"></td>
                              <td><label for="red1">Red</label></td>
                              <td><input type="radio" id="red1" name="socketColor_1" value="2"></td>
                              <td><label for="yellow1">yellow</label></td>
                              <td><input type="radio" id="yellow1" name="socketColor_1" value="4"></td>
                              <td><label for="blue1">blue</label></td>
                              <td><input type="radio" id="blue1" name="socketColor_1" value="8"></td>
                            </tr>
                            <tr>
                              <td colspan="8">Socket2</td>
                            </tr>
                            <tr>
                              <td><label for="meta2">Meta</label></td>
                              <td><input type="radio" id="meta2" name="socketColor_2" value="1"></td>
                              <td><label for="red2">Red</label></td>
                              <td><input type="radio" id="red2" name="socketColor_2" value="2"></td>
                              <td><label for="yellow2">yellow</label></td>
                              <td><input type="radio" id="yellow2" name="socketColor_2" value="4"></td>
                              <td><label for="blue2">blue</label></td>
                              <td><input type="radio" id="blue2" name="socketColor_2" value="8"></td>
                            </tr>
                            <tr>
                              <td colspan="8">Socket3</td>
                            </tr>
                            <tr>
                              <td><label for="meta3">Meta</label></td>
                              <td><input type="radio" id="meta3" name="socketColor_3" value="1"></td>
                              <td><label for="red3">Red</label></td>
                              <td><input type="radio" id="red3" name="socketColor_3" value="2"></td>
                              <td><label for="yellow3">yellow</label></td>
                              <td><input type="radio" id="yellow3" name="socketColor_3" value="4"></td>
                              <td><label for="blue3">blue</label></td>
                              <td><input type="radio" id="blue3" name="socketColor_3" value="8"></td>
                            </tr>
                          </table>
                        </div>
                      </div>
  <!-- socket list end -->

<!-- Resistance Start -->
<div class="inputgroup">
  <div class="inputbar">Item Resistance</div>
  <div class="inputcontent">
    <div class="form-group">
    <input type="text" name="holy_res" class="form-control" placeholder="Holy Resistance">
                    </div>
                    <div class="form-group">
                      <input type="text" name="fire_res" class="form-control" placeholder="Fire Resistance">
                    </div>
                  <div class="form-group">
                      <input type="text" name="nature_res" class="form-control" placeholder="Nature Resistance">
                  </div>
                  <div class="form-group">
                      <input type="text" name="frost_res" class="form-control" placeholder="Frost Resistance">
                    </div>
                  <div class="form-group">
                    <input type="text" name="shadow_res" class="form-control" placeholder="Shadow Resistance">
                  </div>
                  <div class="form-group">
                    <input type="text" name="arcane_res" class="form-control" placeholder="Arcane Resistance">
                  </div>
                </div>

            </div>
<!-- Resistance End -->
          <input type="submit" style="display:block;margin:10px auto 0 auto;" class="btn btn-success" value="Create Item">
        </form>
        </div>
  </div>
</div>
