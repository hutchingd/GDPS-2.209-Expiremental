<?php
chdir(dirname(__FILE__));
require "../lib/connection.php";
require_once "../lib/GJPCheck.php";
require_once "../lib/exploitPatch.php";
require_once "../lib/mainLib.php";
$gs = new mainLib();

$accountID = GJPCheck::getAccountIDOrDie();
$threadID = isset($_POST["threadID"]) ? ExploitPatch::number($_POST["threadID"]) : 0;
$page = isset($_POST["page"]) ? ExploitPatch::number($_POST["page"]) : 0;

exit("-2");
?>
