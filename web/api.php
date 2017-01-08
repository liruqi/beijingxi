<?php
/* Test:
 * curl -iv "http://beijingxi.net/api.php?a=reserve" -d "car=1234567&time=noon" 
 */

$action = $_GET["a"];
$ret = array("code" => 0);
$dbfile = "/tmp/r.json";
$prod = ! $_GET["debug"];
if ($action == "reserve") {
    $car_id = $_POST["car_id"];
    $car_reg = $_POST["car_reg"];
    $time = $_POST["time"];
    if (strlen($car_id) == 6) {
        $json = file_get_contents("/tmp/r.json");
        $obj = json_decode($json, true);
        $obj[$car_reg . $car_id] = $_POST;
        setcookie("reserve", json_encode($_POST));
        file_put_contents($dbfile, json_encode($obj));
        echo "OK";
        if ($prod) header("Location: /ressuc.html"); /* Redirect browser */
        exit(0);
    } else {
        echo "Error: bad car ID format";
        if ($prod) header("Location: /resfail.html"); /* Redirect browser */
    }
}
