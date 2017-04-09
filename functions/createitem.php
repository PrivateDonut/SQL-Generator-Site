<?php
error_reporting(-1);
function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

$name = "../files/".md5(generateRandomString()).".sql";

$file = fopen($name, "w") or die("Unable to open file!");

if(empty($_POST['entry'])) { $entry = 0; }else{ $entry = $_POST['entry'];}
if(empty($_POST['class '])) { $class  = 0; }else{ $class  = $_POST['class '];}
if(empty($_POST['subclass '])) { $subclass  = 0; }else{ $subclass  = $_POST['subclass '];}
if(empty($_POST['cName'])) { $cName = 0; }else{ $cName = $_POST['cName'];}
if(empty($_POST['displayid'])) { $displayid = 0; }else{ $displayid = $_POST['displayid'];}
if(empty($_POST['Quality'])) { $Quality = 0; }else{ $Quality = $_POST['Quality'];}
if(empty($_POST['Flags'])) { $Flags = 0; }else{ $Flags = $_POST['Flags'];}
if(empty($_POST['FlagsExtra'])) { $FlagsExtra = 0; }else{ $FlagsExtra = $_POST['FlagsExtra'];}
if(empty($_POST['sellPrice'])) { $sellPrice = 0; }else{ $sellPrice = $_POST['sellPrice'];}
if(empty($_POST['inventoryType'])) { $inventoryType = 0; }else{ $inventoryType = $_POST['inventoryType'];}
if(empty($_POST['RequiredLevel'])) { $RequiredLevel = 0; }else{ $RequiredLevel = $_POST['RequiredLevel'];}
if(empty($_POST['itemLevel'])) { $itemLevel = 0; }else{ $itemLevel = $_POST['itemLevel'];}
if(empty($_POST['itemLevel'])) { $itemLevel = 0; }else{ $itemLevel = $_POST['itemLevel'];}
if(empty($_POST['StatsCount'])) { $StatsCount = 0; }else{ $StatsCount = $_POST['StatsCount'];}
if(empty($_POST['stat_type1'])) { $stat_type1 = 0; }else{ $stat_type1 = $_POST['stat_type1'];}
if(empty($_POST['stat_value1'])) { $stat_value1 = 0; }else{ $stat_value1 = $_POST['stat_value1'];}
if(empty($_POST['stat_type2'])) { $stat_type2 = 0; }else{ $stat_type2 = $_POST['stat_type2'];}
if(empty($_POST['stat_value2'])) { $stat_value2 = 0; }else{ $stat_value2 = $_POST['stat_value2'];}
if(empty($_POST['stat_type3'])) { $stat_type3  = 0; }else{ $stat_type3 = $_POST['stat_type3'];}
if(empty($_POST['stat_value3'])) { $stat_value3 = 0; }else{ $stat_value3 = $_POST['stat_value3'];}
if(empty($_POST['stat_type4'])) { $stat_type4 = 0; }else{ $stat_type4 = $_POST['stat_type4'];}
if(empty($_POST['stat_value4'])) { $stat_value4 = 0; }else{ $stat_value4 = $_POST['stat_value4'];}
if(empty($_POST['stat_type5'])) { $stat_type5 = 0; }else{ $stat_type5 = $_POST['stat_type5'];}
if(empty($_POST['stat_value5'])) { $stat_value5 = 0; }else{ $stat_value5 = $_POST['stat_value5'];}
if(empty($_POST['stat_type6'])) { $stat_type6 = 0; }else{ $stat_type6 = $_POST['stat_type6'];}
if(empty($_POST['stat_value6'])) { $stat_value6 = 0; }else{ $stat_value6 = $_POST['stat_value6'];}
if(empty($_POST['stat_type7'])) { $stat_type7 = 0; }else{ $stat_type7 = $_POST['stat_type7'];}
if(empty($_POST['stat_value7'])) { $stat_value7 = 0; }else{ $stat_value7 = $_POST['stat_value7'];}
if(empty($_POST['stat_type8'])) { $stat_type8 = 0; }else{ $stat_type8 = $_POST['stat_type8'];}
if(empty($_POST['stat_value8'])) { $stat_value8 = 0; }else{ $stat_value8 = $_POST['stat_value8'];}
if(empty($_POST['stat_type9'])) { $stat_type9 = 0; }else{ $stat_type9 = $_POST['stat_type9'];}
if(empty($_POST['stat_value9'])) { $stat_value9 = 0; }else{ $stat_value9 = $_POST['stat_value9'];}
if(empty($_POST['stat_type10'])) { $stat_type10 = 0; }else{ $stat_type10 = $_POST['stat_type10'];}
if(empty($_POST['stat_value10'])) { $stat_value10 = 0; }else{ $stat_value10 = $_POST['stat_value10'];}
if(empty($_POST['dmg_min1'])) { $dmg_min1 = 0; }else{ $dmg_min1 = $_POST['dmg_min1'];}
if(empty($_POST['dmg_max1'])) { $dmg_max1 = 0; }else{ $dmg_max1 = $_POST['dmg_max1'];}
if(empty($_POST['dmg_type1'])) { $dmg_type1 = 0; }else{ $dmg_type1 = $_POST['dmg_type1'];}
if(empty($_POST['armor'])) { $armor = 0; }else{ $armor = $_POST['armor'];}
if(empty($_POST['holy_res'])) { $holy_res = 0; }else{ $holy_res = $_POST['holy_res'];}
if(empty($_POST['fire_res'])) { $fire_res = 0; }else{ $fire_res = $_POST['fire_res'];}
if(empty($_POST['nature_res'])) { $nature_res = 0; }else{ $nature_res = $_POST['nature_res'];}
if(empty($_POST['frost_res'])) { $frost_res = 0; }else{ $frost_res = $_POST['frost_res'];}
if(empty($_POST['shadow_res'])) { $shadow_res = 0; }else{ $shadow_res = $_POST['shadow_res'];}
if(empty($_POST['arcane_res'])) { $arcane_res = 0; }else{ $arcane_res = $_POST['arcane_res'];}
if(empty($_POST['delay'])) { $delay = 0; }else{ $delay = $_POST['delay'];}
if(empty($_POST['ammo_type'])) { $ammo_type = 0; }else{ $ammo_type = $_POST['ammo_type'];}
if(empty($_POST['RangedModRange'])) { $RangedModRange = 0; }else{ $RangedModRange = $_POST['RangedModRange'];}
if(empty($_POST['spellid_1'])) { $spellid_1 = 0; }else{ $spellid_1 = $_POST['spellid_1'];}
if(empty($_POST['spelltrigger_1'])) { $spelltrigger_1 = 0; }else{ $spelltrigger_1 = $_POST['spelltrigger_1'];}
if(empty($_POST['spellcharges_1'])) { $spellcharges_1 = 0; }else{ $spellcharges_1 = $_POST['spellcharges_1'];}
if(empty($_POST['spellppmRate_1'])) { $spellppmRate_1 = 0; }else{ $spellppmRate_1 = $_POST['spellppmRate_1'];}
if(empty($_POST['spellcooldown_1'])) { $spellcooldown_1 = 0; }else{ $spellcooldown_1 = $_POST['spellcooldown_1'];}
if(empty($_POST['spellid_2'])) { $spellid_2 = 0; }else{ $spellid_2 = $_POST['spellid_2'];}
if(empty($_POST['spelltrigger_2'])) { $spelltrigger_2 = 0; }else{ $spelltrigger_2 = $_POST['spelltrigger_2'];}
if(empty($_POST['spellcharges_2'])) { $spellcharges_2 = 0; }else{ $spellcharges_2 = $_POST['spellcharges_2'];}
if(empty($_POST['spellppmRate_2'])) { $spellppmRate_2 = 0; }else{ $spellppmRate_2 = $_POST['spellppmRate_2'];}
if(empty($_POST['spellcooldown_2'])) { $spellcooldown_2 = 0; }else{ $spellcooldown_2 = $_POST['spellcooldown_2'];}
if(empty($_POST['spellid_3'])) { $spellid_3 = 0; }else{ $spellid_3 = $_POST['spellid_3'];}
if(empty($_POST['spelltrigger_3'])) { $spelltrigger_3 = 0; }else{ $spelltrigger_3 = $_POST['spelltrigger_3'];}
if(empty($_POST['spellcharges_3'])) { $spellcharges_3 = 0; }else{ $spellcharges_3 = $_POST['spellcharges_3'];}
if(empty($_POST['spellppmRate_3'])) { $spellppmRate_3 = 0; }else{ $spellppmRate_3 = $_POST['spellppmRate_3'];}
if(empty($_POST['spellcooldown_3'])) { $spellcooldown_3 = 0; }else{ $spellcooldown_3 = $_POST['spellcooldown_3'];}
if(empty($_POST['spellid_4'])) { $spellid_4 = 0; }else{ $spellid_4 = $_POST['spellid_4'];}
if(empty($_POST['spelltrigger_4'])) { $spelltrigger_4 = 0; }else{ $spelltrigger_4 = $_POST['spelltrigger_4'];}
if(empty($_POST['spellcharges_4'])) { $spellcharges_4 = 0; }else{ $spellcharges_4 = $_POST['spellcharges_4'];}
if(empty($_POST['spellppmRate_4'])) { $spellppmRate_4 = 0; }else{ $spellppmRate_4 = $_POST['spellppmRate_4'];}
if(empty($_POST['spellcooldown_4'])) { $spellcooldown_4 = 0; }else{ $spellcooldown_4 = $_POST['spellcooldown_4'];}
if(empty($_POST['spellid_5'])) { $spellid_5 = 0; }else{ $spellid_5 = $_POST['spellid_5'];}
if(empty($_POST['spelltrigger_5'])) { $spelltrigger_5 = 0; }else{ $spelltrigger_5 = $_POST['spelltrigger_5'];}
if(empty($_POST['spellcharges_5'])) { $spellcharges_5 = 0; }else{ $spellcharges_5 = $_POST['spellcharges_5'];}
if(empty($_POST['spellppmRate_5'])) { $spellppmRate_5 = 0; }else{ $spellppmRate_5 = $_POST['spellppmRate_5'];}
if(empty($_POST['spellcooldown_5'])) { $spellcooldown_5 = 0; }else{ $spellcooldown_5 = $_POST['spellcooldown_5'];}
if(empty($_POST['bonding'])) { $bonding = 0; }else{ $bonding = $_POST['bonding'];}
if(empty($_POST['sheath'])) { $sheath = 0; }else{ $sheath = $_POST['sheath'];}
if(empty($_POST['socketColor_1'])) { $socketColor_1 = 0; }else{ $socketColor_1 = $_POST['socketColor_1'];}
if(empty($_POST['socketColor_2'])) { $socketColor_2 = 0; }else{ $socketColor_2 = $_POST['socketColor_2'];}
if(empty($_POST['socketColor_3'])) { $socketColor_3 = 0; }else{ $socketColor_3 = $_POST['socketColor_3'];}
if(empty($_POST['flagsCustom'])) { $flagsCustom = 0; }else{ $flagsCustom = $_POST['flagsCustom'];}

// Handles the output of which checkboxes you click for AllowableClass
if(!empty($_POST['AllowableClass'])) {
  $checkbox = $_POST['AllowableClass'];
  $AllowableClass = 0;

  foreach ($checkbox as $valueOfCheckbox) {
    $AllowableClass += $valueOfCheckbox;
  }
}else{
  $AllowableClass = "-1";
}

// handles the output of which checkboxes you click for AllowableRace
if(!empty($_POST['AllowableRace'])) {
  $checkbox = $_POST['AllowableRace'];
  $AllowableRace = 0;

  foreach ($checkbox as $valueOfCheckbox) {
    $AllowableRace += $valueOfCheckbox;
  }
}else{
  $AllowableRace = "-1";
}


$dps = $_POST['dps'];

if($class == 2) {
  $dmg_max1 = "400";
  $dmg_min1 = "200";
  $speed = $_POST['delay']/1000;
  $variance = ($dmg_max1-$dmg_min1)/2;
  $targetdmg = ($dps*$speed);
  $min = round($targetdmg - $variance);
  $max = round($targetdmg + $variance);
  $avghit = ($max + $min)/2;
  $resultdps = ($min+$max)/2/$speed;
}else{
  $min = 0;
  $max = 0;
}

$text = "INSERT INTO item_template (entry, class, name, subclass, displayid, Quality, Flags, FlagsExtra, sellPrice, inventoryType, AllowableClass, AllowableRace, itemLevel, RequiredLevel, StatsCount, stat_type1, stat_value1, stat_type2, stat_value2, stat_type3, stat_value3, stat_type4, stat_value4, stat_type5, stat_value5, stat_type6, stat_value6, stat_type7, stat_value7, stat_type8, stat_value8, stat_type9, stat_value9, stat_type10, stat_value10, dmg_min1, dmg_max1, dmg_type1, armor, holy_res, fire_res, nature_res, frost_res, shadow_res, arcane_res, delay, ammo_type, RangedModRange, spellid_1, spelltrigger_1, spellcharges_1, spellppmRate_1, spellcooldown_1, spellid_2, spelltrigger_2, spellcharges_2, spellppmRate_2, spellcooldown_2, spellid_3, spelltrigger_3, spellcharges_3, spellppmRate_3, spellcooldown_3, spellid_4, spelltrigger_4, spellcharges_4, spellppmRate_4, spellcooldown_4, spellid_5,
  spelltrigger_5, spellcharges_5, spellppmRate_5, spellcooldown_5, bonding, sheath, socketColor_1, socketColor_2, socketColor_3, flagsCustom )
VALUES ($entry, $class, $subclass, '$cName', $displayid, $Quality, $Flags, $FlagsExtra, $sellPrice, $inventoryType, $AllowableClass, $AllowableRace, $itemLevel, $RequiredLevel, $StatsCount, $stat_type1, $stat_value1, $stat_type2, $stat_value2, $stat_type3, $stat_value3, $stat_type4, $stat_value4, $stat_type5, $stat_value5, $stat_type6, $stat_value6, $stat_type7, $stat_value7, $stat_type8, $stat_value8, $stat_type9,
$stat_value9, $stat_type10, $stat_value10, $dmg_min1, $dmg_max1, $dmg_type1, $armor, $holy_res, $fire_res, $nature_res, $frost_res, $shadow_res, $arcane_res, $delay, $ammo_type, $RangedModRange, $spellid_1, $spelltrigger_1, $spellcharges_1, $spellppmRate_1, $spellcooldown_1, $spellid_2, $spelltrigger_2, $spellcharges_2, $spellppmRate_2, $spellcooldown_2,
$spellid_3, $spelltrigger_3, $spellcharges_3, $spellppmRate_3, $spellcooldown_3, $spellid_4, $spelltrigger_4, $spellcharges_4, $spellppmRate_4, $spellcooldown_4, $spellid_5, $spelltrigger_5, $spellcharges_5, $spellppmRate_5, $spellcooldown_5, $bonding, $sheath, $socketColor_1, $socketColor_2, $socketColor_3, $flagsCustom);";
fwrite($file, $text);

header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename='" . basename($name) . "'");
readfile ($name);
//header('location: ../?p=createitem');
?>
