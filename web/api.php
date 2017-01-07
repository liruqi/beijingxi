<?php
/* Test:
 * curl -iv "http://beijingxi.net/api.php?a=reserve" -d "car=1234567&time=noon" 
 */

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
        setcookie("reserve", json_encode($_POST));
        file_put_contents($dbfile, json_encode($obj));
        echo "OK";
        header("Location: /ressuc.html"); /* Redirect browser */
        exit(0);
    } else {
        echo "Error: bad car ID format";
        header("Location: /resfail.html"); /* Redirect browser */
    }
}
