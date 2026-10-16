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
$notificationID = isset($_POST["notificationID"]) ? ExploitPatch::number($_POST["notificationID"]) : 0;
if($accountID == $targetAccountID) exit("-1");

$query = $db->prepare("DELETE FROM follows WHERE accountID = :accountID AND targetAccountID = :targetAccountID");
$query->execute([':accountID' => $accountID, ':targetAccountID' => $targetAccountID]);
$gs->logAction($accountID, 81, $targetAccountID);
echo 1;
?>
