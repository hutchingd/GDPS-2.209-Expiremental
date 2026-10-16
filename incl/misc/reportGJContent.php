<?php
chdir(dirname(__FILE__));
require "../lib/connection.php";
require_once "../lib/GJPCheck.php";
require_once "../lib/exploitPatch.php";
require_once "../lib/mainLib.php";
$gs = new mainLib();

$accountID = GJPCheck::getAccountIDOrDie();
$targetID = isset($_POST["targetID"]) ? ExploitPatch::number($_POST["targetID"]) : 0;
$type = isset($_POST["type"]) ? ExploitPatch::number($_POST["type"]) : 0;
$reasons = isset($_POST["reasons"]) ? ExploitPatch::remove($_POST["reasons"]) : "";
$messageID = isset($_POST["messageID"]) ? ExploitPatch::number($_POST["messageID"]) : 0;
$follows = isset($_POST["follows"]) ? ExploitPatch::number($_POST["follows"]) : 0;

if(empty($targetID) || empty($type)) exit("-1");

echo 1;
?>
