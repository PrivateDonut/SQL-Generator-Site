<?php
// Randomly generates name for sql file
function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

$name = "../files/".md5(generateRandomString()).".sql";
$file = fopen($name, "w") or die("Unable to open file!");

// Inputs values from "createitem.php"
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

// text = sql query using the information from createitem.php
$text = "INSERT INTO item_template (entry, class, subclass, name, displayid, inventoryType, StatsCount, stat_type1, stat_type2, stat_type3, stat_type4, stat_type5, stat_type6, stat_type7, stat_type8, stat_type9, stat_type10, stat_value1, stat_value2, stat_value3, stat_value4, stat_value5, stat_value6, stat_value7, stat_value8, stat_value9, stat_value10)
VALUES ($entry, $class, $subclass, '" . $_POST['name'] . "', $display, $invtype, 10, $stattype1, $stattype2, $stattype3, $stattype4, $stattype5, $stattype6, $stattype7, $stattype8, $stattype9, $stattype10, $statval1, $statval2, $statval3, $statval4, $statval5, $statval6, $statval7, $statval8, $statval9, $statval10);";
fwrite($file, $text);

// Auto download file after creating it above.
header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename='" . basename($name) . "'");
readfile ($name);
//header('location: ../?p=createitem');
?>
