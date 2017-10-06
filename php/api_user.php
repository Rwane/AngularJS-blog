<?php

require_once('init.php');

$validate = true;

$errors = [];

function verif_inscription_step1($pdo,$email,$pseudo){

	$sql = "SELECT * FROM  user WHERE email = $email OR pseudo = $pseudo";
	$exe= $pdo->prepare($sql)
	$exe->execute();
	$results = $exe->fetchall()

	if(count(results) > 0){
		$validate = false;
	}
}

function verif_inscription_step2($pdo,$array){
	if($array['pseudo']>16 || $array['pseudo']<5){
		$validate = false;
		$errors[] = "le pseudo doit faire entre 5 et 16 caractères";
	}
	if($array['password']>20 || $array['password']<5){
		$validate = false;
		$errors[] = "le password doit faire entre 5 et 20 caractères";
	}
	if($array['password']>20 || $array['password']<5){
		$validate = false;
		$errors[] = "le pseudo doit faire entre 5 et 20 caractères";
	}
	if (!filter_var($array['email'], FILTER_VALIDATE_EMAIL)){
		$valide = false;
		$errors 
	}
}

?>