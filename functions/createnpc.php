<?php
// Randomly generates name for sql file
function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

$name = "../files/".md5(generateRandomString()).".sql";
$file = fopen($name, "w") or die("Unable to open file!");



$checkbox = $_POST['checkbox_value'];

$calculate = 0;

// The error occurs here.
if(is_array($checkbox) || is_object($checkbox)) {
foreach ($checkbox as $valueOfCheckbox) {
      $calculate += $valueOfCheckbox;
}
} else {
 	$calculate =  "0";
}


// Inputs values from "createnpc.php"
if(empty($_POST['entry'])) { $entry = 0; }else{ $entry = $_POST['entry'];}
if(empty($_POST['modelid1'])) { $modelid1 = 0; }else{ $modelid1 = $_POST['modelid1'];}
if(empty($_POST['modelid2'])) { $modelid2 = 0; }else{ $modelid2 = $_POST['modelid2'];}
if(empty($_POST['modelid3'])) { $modelid3 = 0; }else{ $modelid3 = $_POST['modelid3'];}
if(empty($_POST['modelid4'])) { $modelid4 = 0; }else{ $modelid4 = $_POST['modelid4'];}
if(empty($_POST['cName'])) { $cName = "Name Placement Here"; }else{ $cName = $_POST['cName'];}
if(empty($_POST['cSubname'])) { $cSubname = "Name Sub Placement Here"; }else{ $cSubname = $_POST['cSubname'];}
if(empty($_POST['minlevel'])) { $minlevel = 1; }else{ $minlevel = $_POST['minlevel'];}
if(empty($_POST['maxlevel'])) { $maxlevel = 1; }else{ $maxlevel = $_POST['maxlevel'];}
if(empty($_POST['faction'])) { $faction = 0; }else{ $faction = $_POST['faction'];}
if(empty($_POST['faction'])) { $faction = 0; }else{ $faction = $_POST['faction'];}
if(empty($_POST['speed_walk'])) { $speed_walk = 0; }else{ $speed_walk = $_POST['speed_walk'];}
if(empty($_POST['speed_run'])) { $speed_run = 0; }else{ $speed_run = $_POST['speed_run'];}
if(empty($_POST['scale'])) { $scale = 0; }else{ $scale = $_POST['scale'];}
if(empty($_POST['rank'])) { $rank = 0; }else{ $rank = $_POST['rank'];}
if(empty($_POST['dmgschool'])) { $dmgschool = 0; }else{ $dmgschool = $_POST['dmgschool'];}
if(empty($_POST['BaseAttackTime'])) { $BaseAttackTime = 0; }else{ $BaseAttackTime = $_POST['BaseAttackTime'];}
if(empty($_POST['RangeAttackTime'])) { $RangeAttackTime = 0; }else{ $RangeAttackTime = $_POST['RangeAttackTime'];}
if(empty($_POST['unit_class'])) { $unit_class = 0; }else{ $unit_class = $_POST['unit_class'];}
if(empty($_POST['family'])) { $family = 0; }else{ $family = $_POST['family'];}
if(empty($_POST['type'])) { $type = 0; }else{ $type = $_POST['type'];}
if(empty($_POST['lootid'])) { $lootid = 0; }else{ $lootid = $_POST['lootid'];}
if(empty($_POST['resistance1'])) { $resistance1 = 0; }else{ $resistance1 = $_POST['resistance1'];}
if(empty($_POST['resistance2'])) { $resistance2 = 0; }else{ $resistance2 = $_POST['resistance2'];}
if(empty($_POST['resistance3'])) { $resistance3 = 0; }else{ $resistance3 = $_POST['resistance3'];}
if(empty($_POST['resistance4'])) { $resistance4 = 0; }else{ $resistance4 = $_POST['resistance4'];}
if(empty($_POST['resistance5'])) { $resistance5 = 0; }else{ $resistance5 = $_POST['resistance5'];}
if(empty($_POST['resistance6'])) { $resistance6 = 0; }else{ $resistance6 = $_POST['resistance6'];}
if(empty($_POST['mingold'])) { $mingold = 0; }else{ $mingold = $_POST['mingold'];}
if(empty($_POST['maxgold'])) { $maxgold = 0; }else{ $maxgold = $_POST['maxgold'];}
// text = sql query using the information from createitem.php
$text = "INSERT INTO creature_template (entry, modelid1, modelid2, modelid3, modelid4, name, subname, minlevel, maxlevel, faction, npcflag, speed_walk, speed_run, scale, rank, dmgschool, BaseAttackTime, RangeAttackTime, unit_class, family, type, lootid, resistance1, resistance2, resistance3, resistance4, resistance5, resistance6, mingold, maxgold)
VALUES ($entry, $modelid1, $modelid2, $modelid3, $modelid4, '$cName', '$cSubname', $minlevel, $maxlevel, $faction, $calculate, $speed_walk, $speed_run, $scale, $rank, $dmgschool, $BaseAttackTime, $RangeAttackTime, $unit_class, $family, $type, $lootid, $resistance1, $resistance2, $resistance3, $resistance4, $resistance5, $resistance6, $mingold, $maxgold);";
fwrite($file, $text);

header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename='" . basename($name) . "'");
readfile ($name);
?>
