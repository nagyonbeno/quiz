<?php
session_start();
require 'functions.php';

db_connect();
$kerdesek = get_kerdes();

$id = array();
$valasz_szoveg = array($_POST['nev'],$_POST['nem'],$_POST['buzi']);
$kerdesek_szama = count(count_kerdes());


include 'views/index.tmpl.php';


if(isset($_POST['submit'])){

	for ($i=0; $i < $kerdesek_szama ; $i++) { 

		insert_valasz($id[i],$valasz_szoveg[i]);

	}
 	
 	echo $kerdesek_szama;
 }

?>