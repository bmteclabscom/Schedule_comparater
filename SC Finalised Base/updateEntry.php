<?php
/* ALLOWS USER TO MODIFY OWN ENTRY VIA QUERY TO UPDATE ENTRY IN DATABASE TABLE */
session_start();
$db = new mysqli('localhost', 'root', '', 'schedulecomparator');

$result = $db->query("UPDATE " . $_SESSION['sessionID'] . " SET dates='" . $_GET['dates'] . "' WHERE person='" . $_GET['person'] . "';");

$db->close();
return $result;
?>