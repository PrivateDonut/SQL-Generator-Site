<?php
// Randomly generates name for sql file
function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

$name = "../files/".md5(generateRandomString()).".sql";
$file = fopen($name, "w") or die("Unable to open file!");

// Inputs values from "createnpc.php"
if(empty($_POST['entry'])) { $entry = 0; }else{ $entry = $_POST['entry'];}

// text = sql query using the information from createitem.php
$text = "INSERT INTO creature_template (entry)
VALUES ($entry);";
fwrite($file, $text);

header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename='" . basename($name) . "'");
readfile ($name);
?>
