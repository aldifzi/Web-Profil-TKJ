<?php

if (!isset($_SESSION['lang']))
$_SESSION['lang'] = "id";
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
    if  ($_GET['lang'] == "id")
         $_SESSION['lang'] = "id";
    else if ($_GET['lang'] == "en")
           $_SESSION['lang'] = "en";
}
require_once "bahasa/" . $_SESSION['lang'] . ".php";
?>