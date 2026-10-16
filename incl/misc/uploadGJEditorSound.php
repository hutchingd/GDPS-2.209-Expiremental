<?php
chdir(dirname(__FILE__));
require "../lib/connection.php";
require_once "../lib/GJPCheck.php";
require_once "../lib/exploitPatch.php";
require_once "../lib/mainLib.php";
$gs = new mainLib();

$accountID = GJPCheck::getAccountIDOrDie();
$soundName = isset($_POST["soundName"]) ? ExploitPatch::remove($_POST["soundName"]) : "";
$soundDesc = isset($_POST["soundDesc"]) ? ExploitPatch::remove($_POST["soundDesc"]) : "";
$soundData = isset($_POST["soundData"]) ? ExploitPatch::remove($_POST["soundData"]) : "";
$soundID = isset($_POST["soundID"]) ? ExploitPatch::number($_POST["soundID"]) : 0;
$soundCount = isset($_POST["soundCount"]) ? ExploitPatch::number($_POST["soundCount"]) : 0;
$listID = isset($_POST["listID"]) ? ExploitPatch::number($_POST["listID"]) : 0;
$unlisted = isset($_POST["unlisted"]) ? ExploitPatch::number($_POST["unlisted"]) : 0;

if(empty($soundName) || empty($soundData)) exit("-1");

echo 1;
?>
