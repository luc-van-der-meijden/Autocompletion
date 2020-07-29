<?php
	include('connexionsql.php');

	$term = $_GET['term'];
	$requete = $bdd->prepare('SELECT first_name, last_name FROM autocompletion WHERE last_name LIKE :term OR first_name LIKE :term LIMIT 0,10');
	$requete->execute(array('term' => '%'.$term.'%'));
	$array = array();

	while($donnee = $requete->fetch())
	{
		$name = $donnee['last_name'].' '.$donnee['first_name'];
		array_push($array, $name);
	}

	echo json_encode($array);
?>