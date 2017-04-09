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
<?php
$unit_class = "
<option value='1'>Warrior</option>
<option value='2'>Paladin</option>
<option value='4'>Rogue</option>
<option value='8'>Mage</option>"
?>
<?php
$family = "
<option value='1'>Wolf</option>
<option value='2'>Cat</option>
<option value='3'>Spider</option>
<option value='4'>Bear</option>
<option value='5'>Boar</option>
<option value='6'>Crocolisk</option>
<option value='7'>Carrion Bird</option>
<option value='8'>Crab</option>
<option value='9'>Gorilla</option>
<option value='11'>Raptor</option>
<option value='12'>Tallstrider</option>
<option value='15'>Felhunter</option>
<option value='16'>Voidwalker</option>
<option value='17'>Succubus</option>
<option value='19'>Doomguard</option>
<option value='20'>Scorpid</option>
<option value='21'>Turtle</option>
<option value='23'>Imp</option>
<option value='24'>Bat</option>
<option value='25'>Hyena</option>
<option value='26'>Owl</option>
<option value='27'>Wind Serpent</option>
<option value='29'>Felguard</option>
<option value='30'>Dragonhawk</option>
<option value='31'>Ravager</option>
<option value='32'>Warp Stalker</option>
<option value='33'>Sporebat</option>
<option value='34'>Nether Ray</option>
<option value='35'>Serpent</option>
<option value='37'>Moth</option>
<option value='38'>Chimaera</option>
<option value='39'>Devilsaur</option>
<option value='40'>Goul</option>
<option value='41'>Silithid</option>
<option value='43'>Worm</option>
<option value='44'>Rhino</option>
<option value='45'>Core Hound</option>
<option value='46'>Spirit Beast</option>"
?>
<?php $type = "
<option value='0'>None</option>
<option value='1'>Beast</option>
<option value='2'>Dragonkin</option>
<option value='3'>Demon</option>
<option value='4'>Elemental</option>
<option value='5'>Giant</option>
<option value='6'>Undead</option>
<option value='7'>Humanoid</option>
<option value='9'>Critter</option>
<option value='9'>Mechanical</option>
<option value='10'>Not Specified</option>
<option value='11'>Totem</option>
<option value='12'>Non-Combat Pet</option>
<option value='13'>Gas Cloud</option>
<option value='14'>Wild Pet</option>
<option value='15'>Aberration</option>"
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

                        <div class="form-group">
                            <input type="text" name="speed_walk" class="form-control" placeholder="NPC Speed Walk">
                        </div>
                        <div class="form-group">
                            <input type="text" name="speed_run" class="form-control" placeholder="NPC Speed Run">
                        </div>
                        <div class="form-group">
                            <input type="text" name="scale" class="form-control" placeholder="NPC Scale">
                        </div>
                        <div class="form-group">
                            <select name="npcrank" class="form-control">
                                <option value='0' selected hidden disabled>NPC Rank</option>
                                <?php echo $npcrank; ?>
                            </select>
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
                    <!-- Creature Flags -->
                    <div class="inputbar">Creature Flags</div>
                    <div class="inputcontent">
                        <div class="form-group">
                            Goosip <input type="checkbox" name="creatureFlag[]" value=1>
                            Quest Giver <input type="checkbox" name="creatureFlag[]" value=2>
                            Trainer <input type="checkbox" name="creatureFlag[]" value=16>
                            Class Trainer <input type="checkbox" name="creatureFlag[]" value=32>
                            Profession Trainer <input type="checkbox" name="creatureFlag[]" value=64>
                            Vendor <input type="checkbox" name="creatureFlag[]" value=128>
                            Repair Vendor <input type="checkbox" name="creatureFlag[]" value=4096>
                            Inn Keeper <input type="checkbox" name="creatureFlag[]" value=128>
                            Banker <input type="checkbox" name="creatureFlag[]" value=131072>
                        </div>
                    </div>

                    <!-- Creature Damage -->
                    <div class="inputbar">Creature Damage</div>
                    <div class="inputcontent">
                        <div class="form-group">
                            <select name="dmgschool" class="form-control">
                                <option value='0' selected hidden disabled>NPC Damage School</option>
                                <?php echo $dmgschool; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="BaseAttackTime" class="form-control" placeholder="Creature Base Attack Time">
                        </div>
                        <div class="form-group">
                            <input type="text" name="RangeAttackTime" class="form-control" placeholder="Creature Range Attack Time">
                        </div>
                    </div>
                    <!--Creature Class / Family -->
                    <div class="inputbar">Creature Class / Family</div>
                    <div class="inputcontent">
                        <div class="form-group">
                            <select name="unit_class" class="form-control">
                                <option value='0' selected hidden disabled>Creature Class</option>
                                <?php echo $unit_class; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="family" class="form-control">
                                <option value='0' selected hidden disabled>Creature Family</option>
                                <?php echo $family; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="type" class="form-control">
                                <option value='0' selected hidden disabled>Creature type</option>
                                <?php echo $type; ?>
                            </select>
                        </div>
                    </div>
                    <!-- Creature Resistance -->
                    <div class="inputbar">Creature Resistance</div>
                    <div class="inputcontent">
                        <div class="form-group">
                            <input type="text" name="resistance1" class="form-control" placeholder="Creature Holy Resistance ">
                        </div>
                        <div class="form-group">
                            <input type="text" name="resistance2" class="form-control" placeholder="Creature Fire Resistance">
                        </div>
                        <div class="form-group">
                            <input type="text" name="resistance3" class="form-control" placeholder="Creature Nature Resistance">
                        </div>
                        <div class="form-group">
                            <input type="text" name="resistance4" class="form-control" placeholder="Creature Frost Resistance">
                        </div>
                        <div class="form-group">
                            <input type="text" name="resistance5" class="form-control" placeholder="Creature Shadow Resistance">
                        </div>
                        <div class="form-group">
                            <input type="text" name="resistance6" class="form-control" placeholder="Creature Arcane Resistance">
                        </div>
                    </div>
                    <!-- Creature Loot Information -->
                    <div class="inputbar">Creature Loot Information</div>
                    <div class="inputcontent">
                        <div class="form-group">
                            <input type="text" name="lootid" class="form-control" placeholder="Creature Loot ID">
                        </div>
                        <div class="form-group">
                            <input type="text" name="mingold" class="form-control" placeholder="Creature Min Gold">
                        </div>
                        <div class="form-group">
                            <input type="text" name="maxgold" class="form-control" placeholder="Creature Max Gold">
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-success" style="display:block;margin:10px auto 0 auto;" value="Create Item">
            </form>

        </div>
    </div>
</div>
