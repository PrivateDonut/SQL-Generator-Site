<?php
// Randomly generates name for sql file
function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

$name = "../files/".md5(generateRandomString()).".sql";
$file = fopen($name, "w") or die("Unable to open file!");

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
if(empty($_POST['faction'])) { $maxlevel = 0; }else{ $faction = $_POST['faction'];}
if(empty($_POST['test'])) { $test = 0; }else{ $test = $_POST['test'];}

// text = sql query using the information from createitem.php
$text = "INSERT INTO creature_template (entry, modelid1, modelid2, modelid3, modelid4, name, subname, minlevel, maxlevel, faction, test)
VALUES ($entry, $modelid1, $modelid2, $modelid3, $modelid4, '$cName', '$cSubname', $minlevel, $maxlevel, $faction, $test);";
fwrite($file, $text);

header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename='" . basename($name) . "'");
readfile ($name);
?>
