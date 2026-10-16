<?php
chdir(dirname(__FILE__));
require "../lib/connection.php";
require_once "../lib/GJPCheck.php";
require_once "../lib/exploitPatch.php";
require_once "../lib/mainLib.php";
$gs = new mainLib();

$accountID = GJPCheck::getAccountIDOrDie();
$threadID = isset($_POST["threadID"]) ? ExploitPatch::number($_POST["threadID"]) : 0;
$value = isset($_POST["value"]) ? ExploitPatch::remove($_POST["value"]) : "";
$str = isset($_POST["str"]) ? ExploitPatch::number($_POST["str"]) : 0;

if(empty($threadID)) exit("-1");

echo 1;
?>
