<?php
chdir(dirname(__FILE__));
require "../lib/connection.php";
require_once "../lib/GJPCheck.php";
require_once "../lib/exploitPatch.php";
require_once "../lib/mainLib.php";
$gs = new mainLib();

$accountID = GJPCheck::getAccountIDOrDie();
$str = isset($_POST["str"]) ? ExploitPatch::remove($_POST["str"]) : "";
$page = isset($_POST["page"]) ? ExploitPatch::number($_POST["page"]) : 0;
$categories = isset($_POST["categories"]) ? ExploitPatch::remove($_POST["categories"]) : "";
$count = isset($_POST["count"]) ? ExploitPatch::number($_POST["count"]) : 0;
$type = isset($_POST["type"]) ? ExploitPatch::number($_POST["type"]) : 0;
$total = isset($_POST["total"]) ? ExploitPatch::number($_POST["total"]) : 0;

exit("-2");
?>
