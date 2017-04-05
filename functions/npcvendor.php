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
if(empty($_POST['cName'])) { $cName = 0; }else{ $cName = $_POST['cName'];}
if(empty($_POST['subname'])) { $subname = 0; }else{ $subname = $_POST['subname'];}
if(empty($_POST['maxlevel'])) { $maxlevel = 0; }else{ $maxlevel = $_POST['maxlevel'];}
if(empty($_POST['npcflag'])) { $npcflag = 0; }else{ $npcflag = $_POST['npcflag'];}
// text = sql query using the information from createitem.php
$text = "INSERT INTO creature_template (entry, modelid1, modelid2, name, subname, minlevel, maxlevel, npcflag)
VALUES ($entry, $modelid1, $modelid2, '$cName', '$subname', $maxlevel, $maxlevel, $npcflag);";
fwrite($file, $text);

header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename='" . basename($name) . "'");
readfile ($name);
?>
