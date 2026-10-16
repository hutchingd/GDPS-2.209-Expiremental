<?php
chdir(dirname(__FILE__));
require "../lib/connection.php";
require_once "../lib/GJPCheck.php";
require_once "../lib/exploitPatch.php";
require_once "../lib/mainLib.php";
$gs = new mainLib();

$accountID = GJPCheck::getAccountIDOrDie();
$levelID = isset($_POST["levelID"]) ? ExploitPatch::number($_POST["levelID"]) : 0;
$levelVersion = isset($_POST["levelVersion"]) ? ExploitPatch::number($_POST["levelVersion"]) : 0;
$refresh = isset($_POST["refresh"]) ? ExploitPatch::number($_POST["refresh"]) : 0;

exit("-2");
?>
