<?php
chdir(dirname(__FILE__));
require "../lib/connection.php";
require_once "../lib/GJPCheck.php";
require_once "../lib/exploitPatch.php";
require_once "../lib/mainLib.php";
$gs = new mainLib();

$accountID = GJPCheck::getAccountIDOrDie();
$page = isset($_POST["page"]) ? ExploitPatch::number($_POST["page"]) : 0;
$threadID = isset($_POST["threadID"]) ? ExploitPatch::number($_POST["threadID"]) : 0;
$search = isset($_POST["search"]) ? ExploitPatch::number($_POST["search"]) : 0;
$query = isset($_POST["query"]) ? ExploitPatch::remove($_POST["query"]) : "";
$user = isset($_POST["user"]) ? ExploitPatch::remove($_POST["user"]) : "";
$filter = isset($_POST["filter"]) ? ExploitPatch::number($_POST["filter"]) : 0;

// Added in 2.209 - discussion threads are not implemented yet, so there is nothing to return.
exit("-2");
?>
