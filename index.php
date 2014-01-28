<?php
session_start();
require 'functions.php';

db_connect();
$kerdesek = get_kerdes();



$kerdes_id = $kerdesekek;
$valasz_szoveg = array($_POST['nev'],$_POST['nem'],$_POST['buzi']);
foreach ($valasz_szoveg as $valasz) {
	insert_valasz($kerdes_id,$valasz);
}

$kerdesek_szama = count(count_kerdes());


include 'views/index.tmpl.php';



?>