<?php
	if($_GET['search'] != ''){}
	else
	{
		header('location: index.php');
	}
	
	include('connexionsql.php');
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo $_GET['search']; ?> - Recherche La Plateforme_</title>
	</head>

	<body>
		<?php 
			$search = $_GET['search'];
			$search = str_replace(' ', '', $search);
			$requete =  $bdd->prepare('SELECT id, first_name, last_name FROM autocompletion WHERE CONCAT(last_name, first_name) LIKE :search');
			$requete->execute(array('search' => '%'.$search.'%'));
			$array = array();

			while($donnee = $requete->fetch())
			{
				$name = $donnee['last_name'].' '.$donnee['first_name'];
				echo '<a href="element.php?id=', $donnee['id'], '">', $name, '</a></br>';
			}
		?>
	</body>
</html>