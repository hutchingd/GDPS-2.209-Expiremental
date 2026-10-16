<?php
chdir(dirname(__FILE__));
require "../lib/connection.php";
require_once "../lib/GJPCheck.php";
require_once "../lib/exploitPatch.php";
require_once "../lib/mainLib.php";
$gs = new mainLib();

$accountID = GJPCheck::getAccountIDOrDie();
$query = isset($_POST["query"]) ? ExploitPatch::remove($_POST["query"]) : "";
$threadID = isset($_POST["threadID"]) ? ExploitPatch::number($_POST["threadID"]) : 0;
$page = isset($_POST["page"]) ? ExploitPatch::number($_POST["page"]) : 0;
$total = isset($_POST["total"]) ? ExploitPatch::number($_POST["total"]) : 0;

exit("-2");
?>
