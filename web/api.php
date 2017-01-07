<?php


$action = $_GET["a"];
$ret = array("code" => 0);
$dbfile = "/tmp/r.json";
if ($action == "reserve") {
    $car = $_POST["car"];
    $time = $_POST["time"];
    if (strlen($car) == 7) {
        $json = file_get_contents("/tmp/r.json");
        $obj = json_decode($json, true);
        $obj['car'] = $_POST;
        file_put_contents($dbfile, json_encode($obj));
        echo "OK";
        exit(0);
    } else {
        echo "Error: bad car ID format";
    }
}
