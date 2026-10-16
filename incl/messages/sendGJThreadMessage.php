<?php
chdir(dirname(__FILE__));
require "../lib/connection.php";
require_once "../lib/GJPCheck.php";
require_once "../lib/exploitPatch.php";
require_once "../lib/mainLib.php";
$gs = new mainLib();

$accountID = GJPCheck::getAccountIDOrDie();
$threadID = isset($_POST["threadID"]) ? ExploitPatch::number($_POST["threadID"]) : 0;
$body = isset($_POST["body"]) ? ExploitPatch::remove($_POST["body"]) : "";
$subject = isset($_POST["subject"]) ? ExploitPatch::remove($_POST["subject"]) : "";
$targets = isset($_POST["targets"]) ? ExploitPatch::remove($_POST["targets"]) : "";
$toAccountID = isset($_POST["toAccountID"]) ? ExploitPatch::number($_POST["toAccountID"]) : 0;
$isDM = isset($_POST["isDM"]) ? ExploitPatch::number($_POST["isDM"]) : 0;
$emote = isset($_POST["emote"]) ? ExploitPatch::number($_POST["emote"]) : 0;

if(empty($body)) exit("-1");

echo 1;
?>
