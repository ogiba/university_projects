<?php

$sec = "10";
$cmd = $_GET["cmd"];


if ($cmd == "getData") {
    $data = file_get_contents("in_file.txt");

    $json = json_decode($data, true);
    $result = array();

    for ($i = 0; $i < count($json); $i++) {
        $result[] = array("I1" => $json[$i]["I1"], "I2" => $json[$i]["I2"], "AI1" => $json[$i]["AI1"], "AI2" => $json[$i]["AI2"]);
    }

    echo json_encode($result);
}

