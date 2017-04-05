<?php
function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

$name = "../files/".md5(generateRandomString()).".sql";

$file = fopen($name, "w") or die("Unable to open file!");

if(empty($_POST['entry'])) { $entry = 0; }else{ $entry = $_POST['entry'];}
if(empty($_POST['class'])) { $class = 0; }else{ $class = $_POST['class'];}
if(empty($_POST['subclass'])) { $subclass = 0; }else{ $subclass = $_POST['subclass'];}
if(empty($_POST['display'])) { $display = 0; }else{ $display = $_POST['display'];}
if(empty($_POST['invtype'])) { $invtype = 0; }else{ $invtype = $_POST['invtype'];}
if(empty($_POST['stattype1'])) { $stattype1 = 0; }else{ $stattype1 = $_POST['stattype1'];}
if(empty($_POST['stattype2'])) { $stattype2 = 0; }else{ $stattype2 = $_POST['stattype2'];}
if(empty($_POST['stattype3'])) { $stattype3 = 0; }else{ $stattype3 = $_POST['stattype3'];}
if(empty($_POST['stattype4'])) { $stattype4 = 0; }else{ $stattype4 = $_POST['stattype4'];}
if(empty($_POST['stattype5'])) { $stattype5 = 0; }else{ $stattype5 = $_POST['stattype5'];}
if(empty($_POST['stattype6'])) { $stattype6 = 0; }else{ $stattype6 = $_POST['stattype6'];}
if(empty($_POST['stattype7'])) { $stattype7 = 0; }else{ $stattype7 = $_POST['stattype7'];}
if(empty($_POST['stattype8'])) { $stattype8 = 0; }else{ $stattype8 = $_POST['stattype8'];}
if(empty($_POST['stattype9'])) { $stattype9 = 0; }else{ $stattype9 = $_POST['stattype9'];}
if(empty($_POST['stattype10'])) { $stattype10 = 0; }else{ $stattype10 = $_POST['stattype10'];}
if(empty($_POST['statval1'])) { $statval1 = 0; }else{ $statval1 = $_POST['statval1'];}
if(empty($_POST['statval2'])) { $statval2 = 0; }else{ $statval2 = $_POST['statval2'];}
if(empty($_POST['statval3'])) { $statval3 = 0; }else{ $statval3 = $_POST['statval3'];}
if(empty($_POST['statval4'])) { $statval4 = 0; }else{ $statval4 = $_POST['statval4'];}
if(empty($_POST['statval5'])) { $statval5 = 0; }else{ $statval5 = $_POST['statval5'];}
if(empty($_POST['statval6'])) { $statval6 = 0; }else{ $statval6 = $_POST['statval6'];}
if(empty($_POST['statval7'])) { $statval7 = 0; }else{ $statval7 = $_POST['statval7'];}
if(empty($_POST['statval8'])) { $statval8 = 0; }else{ $statval8 = $_POST['statval8'];}
if(empty($_POST['statval9'])) { $statval9 = 0; }else{ $statval9 = $_POST['statval9'];}
if(empty($_POST['statval10'])) { $statval10 = 0; }else{ $statval10 = $_POST['statval10'];}
if(empty($_POST['ammo'])) { $ammo = 0; }else{ $ammo = $_POST['ammo'];}
if(empty($_POST['range'])) { $range = 0; }else{ $range = $_POST['range'];}
if(empty($_POST['delay'])) { $delay = 0; }else{ $delay = $_POST['delay'];}
if(empty($_POST['spellid1'])) { $spellid1 = 0; }else{ $spellid1 = $_POST['spellid1'];}
if(empty($_POST['spellid2'])) { $spellid2 = 0; }else{ $spellid2 = $_POST['spellid2'];}
if(empty($_POST['spellid3'])) { $spellid3 = 0; }else{ $spellid3 = $_POST['spellid3'];}
if(empty($_POST['spellid4'])) { $spellid4 = 0; }else{ $spellid4 = $_POST['spellid4'];}
if(empty($_POST['spellid5'])) { $spellid5 = 0; }else{ $spellid5 = $_POST['spellid5'];}
if(empty($_POST['spelltrig1'])) { $spelltrig1 = 0; }else{ $spelltrig1 = $_POST['spelltrig1'];}
if(empty($_POST['spelltrig2'])) { $spelltrig2 = 0; }else{ $spelltrig2 = $_POST['spelltrig2'];}
if(empty($_POST['spelltrig3'])) { $spelltrig3 = 0; }else{ $spelltrig3 = $_POST['spelltrig3'];}
if(empty($_POST['spelltrig4'])) { $spelltrig4 = 0; }else{ $spelltrig4 = $_POST['spelltrig4'];}
if(empty($_POST['spelltrig5'])) { $spelltrig5 = 0; }else{ $spelltrig5 = $_POST['spelltrig5'];}

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

$text = "INSERT INTO item_template (entry, class, subclass, name, displayid, inventoryType, StatsCount, stat_type1, stat_type2, stat_type3, stat_type4, stat_type5, stat_type6, stat_type7, stat_type8, stat_type9, stat_type10, stat_value1, stat_value2, stat_value3, stat_value4, stat_value5, stat_value6, stat_value7, stat_value8, stat_value9, stat_value10, dmg_min1, dmg_max1, delay, RangedModRange, ammo_type, description, spellid_1, spellid_2, spellid_3, spellid_4, spellid_5, spelltrigger_1, spelltrigger_2, spelltrigger_3, spelltrigger_4, spelltrigger_5)
VALUES ($entry, $class, $subclass, '" . $_POST['name'] . "', $display, $invtype, 10, $stattype1, $stattype2, $stattype3, $stattype4, $stattype5, $stattype6, $stattype7, $stattype8, $stattype9, $stattype10, $statval1, $statval2, $statval3, $statval4, $statval5, $statval6, $statval7, $statval8, $statval9, $statval10, $min,
$max, $delay, $range, $ammo, '" . $_POST['desc'] . "', $spellid1, $spellid2, $spellid3, $spellid4, $spellid5, $spelltrig1, $spelltrig2, $spelltrig3, $spelltrig4, $spelltrig5);";
fwrite($file, $text);

header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename='" . basename($name) . "'");
readfile ($name);
//header('location: ../?p=createitem');
?>
