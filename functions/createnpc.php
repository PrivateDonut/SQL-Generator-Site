<?php

// Constants
define("DEFAULT_VALUE", 0);
define("LAST_COLUMN", "maxgold");
define("RANDOM_STRING_LENGTH", 10);

// Array of required fields. <- not used yet.
$requiredFields = array(
    "entry",
    "name",
    "modelid1",
    "modelid2",
    "modelid3",
    "modelid4"
);

/**
 * Generate a set of random characters.
 * @param type $length - amount of random characters
 * @return type a string of random characters.
 */
function generateRandomString($length) {
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}

$name = "../files/" . md5(generateRandomString(RANDOM_STRING_LENGTH)) . ".sql";
$file = fopen($name, "w") or die("Unable to open file!");

// Statement to determine if the checkboxes are clicked or not.
!empty($_POST['creatureFlag']) ? $creatureFlags = $_POST['creatureFlag'] : $creatureFlags = DEFAULT_VALUE;

$sql = "INSERT INTO creature_template (entry, modelid1, modelid2, modelid3, modelid4, name, subname, minlevel, maxlevel, faction, npcflag, speed_walk, speed_run, scale, rank, dmgschool, BaseAttackTime, RangeAttackTime, unit_class, family, type, lootid, resistance1, resistance2, resistance3, resistance4, resistance5, resistance6, mingold, maxgold) VALUES (";

// When the flags are not toggled show a default value.
$creatureFlagSum = DEFAULT_VALUE;

// TODO: There are 30 columns, only 26 fields posted. - Fix it!
//
// Loop through all post requests from the view.
foreach ($_POST as $column => $columnValue) {

    // We have an array of checkboxes in the view
    // so we will run a nested loop when it's found.
    if (is_array($columnValue) || is_object($columnValue)) {
        foreach ($creatureFlags as $flag) {
            $creatureFlagSum += $flag;
        }
        // Add a comma when the loop has finished.
        $sql .= $creatureFlagSum . ",";
    }

    // If the field contains any value
    if (!empty($columnValue) && is_string($columnValue)) {
        $sql .= $columnValue;
    } else {
        // If empty insert a default value.
        $sql .= DEFAULT_VALUE;
    }

    // Check if we've reached the last column.
    if (strcmp($column, LAST_COLUMN)) {
        $sql .= ",";
    }
}

$sql .= ");";

fwrite($file, $sql);
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename='" . basename($name) . "'");
header("Content-Type: application/octet-stream");
readfile($name);
?>
