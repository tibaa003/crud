<?php
require_once("./conn.php");
$crewmates = [$_POST["crewmate1"], $_POST["crewmate2"], $_POST["crewmate3"], $_POST["crewmate4"], $_POST["crewmate5"], $_POST["crewmate6"], $_POST["crewmate7"], $_POST["crewmate8"]];
$imposters = [$_POST["imposter1"], $_POST["imposter2"]];
if ($_POST["imposterWin"] == true) {
    $win = true;
    echo "win";
} else {
    $win = false;
}
$sql = "INSERT INTO game (crewmate1, crewmate2,crewmate3,crewmate4,crewmate5,crewmate6,crewmate7,crewmate8, imposter1,imposter2,imposterWin) VALUES ($crewmates[0],$crewmates[1],$crewmates[2],$crewmates[3],$crewmates[4],$crewmates[5],$crewmates[6],$crewmates[7],$imposters[0],$imposters[1],$win)";
if ($conn->query($sql)) {
    header("location: ../index.html");
} else {
    echo "bruh";
}
