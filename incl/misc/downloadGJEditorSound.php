<?php
chdir(dirname(__FILE__));
require "../lib/connection.php";
require_once "../lib/GJPCheck.php";
require_once "../lib/exploitPatch.php";
require_once "../lib/mainLib.php";
$gs = new mainLib();

$accountID = GJPCheck::getAccountIDOrDie();
$soundID = isset($_POST["soundID"]) ? ExploitPatch::number($_POST["soundID"]) : 0;

exit("-2");
?>
