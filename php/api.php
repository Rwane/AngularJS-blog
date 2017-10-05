<?php
require_once('init.php');

function get_list_articles($pdo){
	$sql = "SELECT a.*, u.pseudo FROM article a JOIN user u ON a.id_author = u.id_user"; //on prepare la requete sql

	$exe= $pdo->prepare($sql);// on l'execute avec la method query, $pdo qui renvoie a la connection bdd dans init.php
	$exe->execute();

	$list_article = array(); // création d'un tableau qui va contenir tous nos articles

	//exécution de la requete déclarer plus haut

	while($result = $exe->fetch(PDO::FETCH_OBJ)){

		array_push($list_article, array("id_article"=>$result->id_article, "title"=>$result->title, "text"=>$result->text, "id_author"=>$result->id_author, "url_img"=>$result->url_img, "pseudo"=>$result->pseudo));
		//on ajoute tout nos articles dans le tableau

	};

	return $list_article;

};


$possible_url = "get_list_articles";//defini les url valables

$value = "";


if(isset($_GET['action']) && $_GET['action'] == $possible_url){
	//si l'url est ok
	
	switch($_GET['action']){
		case "get_list_articles": $value = get_list_articles($pdo);
									$value = (json_encode($value));
		break;//je recupère la liste des articles

		/*case "get_articles": if (isset($_GET['id']))
								$value = get_article_by_id($_GET['id'], $pdo);
							else 
								$value= "argument manquant"; //si l'id manque je change mon message d'erreur

		break;*/
		default;						
	}
}



exit($value);