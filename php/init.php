<?php
//-----connection a la bdd
$pdo = new PDO('mysql:host=localhost;dbname=angularjs-blog','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

//-----session
session_start();

//---chemin
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT']."/angularBlog/angularJS-Blog/");




define("URL", "http://localhost/angularBlog/angularJS-Blog");
