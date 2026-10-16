<?php
chdir(dirname(__FILE__));
require "../lib/connection.php";
require "../../config/misc.php";
require_once "../lib/GJPCheck.php";
require_once "../lib/exploitPatch.php";
require_once "../lib/mainLib.php";
$gs = new mainLib();

if(empty($_POST["targetAccountID"])) exit("-1");

$accountID = GJPCheck::getAccountIDOrDie();
$targetAccountID = ExploitPatch::remove($_POST["targetAccountID"]);
$mute = isset($_POST["mute"]) ? ExploitPatch::number($_POST["mute"]) : 0;
$notificationID = isset($_POST["notificationID"]) ? ExploitPatch::number($_POST["notificationID"]) : 0;
if($accountID == $targetAccountID) exit("-1");

$query = $db->prepare("SELECT count(*) FROM follows WHERE accountID = :accountID AND targetAccountID = :targetAccountID");
$query->execute([':accountID' => $accountID, ':targetAccountID' => $targetAccountID]);
if($query->fetchColumn() == 0){
	$query = $db->prepare("INSERT INTO follows (accountID, targetAccountID, timestamp) VALUES (:accountID, :targetAccountID, :timestamp)");
	$query->execute([':accountID' => $accountID, ':targetAccountID' => $targetAccountID, ':timestamp' => time()]);
}
$gs->logAction($accountID, 80, $targetAccountID);
echo 1;
?>
