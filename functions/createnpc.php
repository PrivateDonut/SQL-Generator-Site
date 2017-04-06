<?php

define("RANDOM_STRING_LENGTH", 10);
define("LAST_COLUMN", "maxgold");

// Randomly generates name for sql file
function generateRandomString($length) {
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}

$name = "../files/" . md5(generateRandomString(RANDOM_STRING_LENGTH)) . ".sql";
$file = fopen($name, "w") or die("Unable to open file!");


!empty($_POST['checkbox_value']) ? $checkbox = $_POST['checkbox_value'] : $checkbox = 0;

$sql = "INSERT INTO creature_template (entry, modelid1, modelid2, modelid3, modelid4, name, subname, minlevel, maxlevel, faction, npcflag, speed_walk, speed_run, scale, rank, dmgschool, BaseAttackTime, RangeAttackTime, unit_class, family, type, lootid, resistance1, resistance2, resistance3, resistance4, resistance5, resistance6, mingold, maxgold) VALUES (";

$calculate = 0;

foreach ($_POST as $column => $columnValue) {
    if (is_array($columnValue) || is_object($columnValue)) {
        foreach ($checkbox as $valueOfCheckbox) {
            $calculate += $valueOfCheckbox;
        }
        $sql .= $calculate . ",";
    } else {
        isset($column) ? $sql .= $columnValue : null;
        strcmp($column, LAST_COLUMN) ? $sql .= "," : null;
    }
}

$sql .= ");";

fwrite($file, $sql);
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename='" . basename($name) . "'");
header("Content-Type: application/octet-stream");
readfile($name);
?>
