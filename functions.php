<?php

function db_connect(){
	global $db;

	$dsn = 'mysql:host=localhost;dbname=kerdoiv;charset=utf8';
	$user = 'root';
	$password = '';

	try {
	    $db = new PDO($dsn, $user, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
	} catch (PDOException $e) {
	    echo 'Connection failed: ' . $e->getMessage();
	}
}

function get_kerdes(){
	global $db;
	$query = $db->prepare('SELECT * FROM kerdes ORDER BY kerdes_id ASC ');

    $query->execute();

    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function count_kerdes(){
	global $db;
	$query = $db->prepare('SELECT kerdes_id FROM kerdes');

    $query->execute();

    return $query->fetchAll(PDO::FETCH_NUM);
}

function insert_valasz($kerdes_id,$valasz_szoveg){
	global $db;

	$sql = "INSERT INTO valasz (kerdes_id,valasz_szoveg) VALUES (:kerdes_id,:valasz_szoveg)";
	$query = $db->prepare($sql);
	$query->execute(array(':kerdes_id'=>$kerdes_id,
                  	  	  ':valasz_szoveg'=>$valasz_szoveg));



}



?>


