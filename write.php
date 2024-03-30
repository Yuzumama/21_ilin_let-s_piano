<?php

// Get input data
$date = date("Y-m-d H:i:s");
$name = $_POST["name"];
$author = $_POST["author"];
$input_record = $_POST["input_record"];
$memo = $_POST["memo"];
$delete_record = $_POST["delete_record"];
$category = $_POST["category"];

// Read from text file
$json_str = "";
$file_name = "data/" . $category . ".txt";
if (file_exists($file_name)) {
    $json_str = file_get_contents($file_name);

    // Decode to array
    $records = json_decode($json_str, true);
}
else 
{
    // Create new array
    $records = array();
}

// Find the same song
for($i = 0 ; $i < count($records); $i ++){
    $record = $records[$i];
    if ($record["name"] == $name && $record["author"] == $author) {
        array_splice($records, $i, 1);
        break;
    }
}

// Append new contents
if ($delete_record != "1") {
    array_push($records, [
        'date' => $date,
        'name' => $name,
        'author' => $author,
        'record' => $input_record,
        'memo' => $memo,
    ]);
}

$output_json_str = json_encode($records);

//File書き込み
$file = fopen($file_name, "w");	// ファイル読み込み

fwrite($file, $output_json_str);

fclose($file);

header("Location: index.php");

exit;

?>
