<?php
$conn = mysqli_connect("127.0.0.1", "root", "ascent", "world");

$escaped_string = "%" . $_GET['dispname'] . "%";

if(empty($_GET['dispname'])) { exit; }

$rows = array();

$stmt = $conn->prepare("SELECT displayid, name, entry, quality FROM item_template WHERE name LIKE ? LIMIT 200");
$stmt->bind_param("s", $escaped_string);
$stmt->execute();
$stmt->bind_result($display, $name, $entry, $quality);
$stmt->store_result();
if($stmt->num_rows > 0) {
  while($stmt->fetch()) {
    $rows[] = array(
      'id' => $display,
      'name' => $name,
      'entry' => $entry,
      'color' => $quality
    );
  }
}

header('Content-Type: application/json');
echo json_encode($rows);
