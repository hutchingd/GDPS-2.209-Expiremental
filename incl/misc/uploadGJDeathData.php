<?php
chdir(dirname(__FILE__));
require "../lib/connection.php";
require_once "../lib/GJPCheck.php";
require_once "../lib/exploitPatch.php";
require_once "../lib/mainLib.php";
$gs = new mainLib();

$accountID = GJPCheck::getAccountIDOrDie();
$levelID = isset($_POST["levelID"]) ? ExploitPatch::number($_POST["levelID"]) : 0;
$data = isset($_POST["data"]) ? ExploitPatch::remove($_POST["data"]) : "";

if(empty($levelID) || empty($data)) exit("-1");

echo 1;
?>
