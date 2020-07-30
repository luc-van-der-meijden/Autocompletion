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
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" media="screen" href="style.css"/>
		<link rel="icon" type="image/png" href="Images/tesla_logo_PNG13.png"/>
		<title><?php echo $_GET['search']; ?> - Recherche Tesla</title>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
			$( function() {
				$('#barre_recherche').autocomplete({
					source : 'liste.php',
					position: {my: "left top", at: "left top"}
				});
			});
		</script>
	</head>

	<body>
		<header>
			<?php include("header.php"); ?>
		</header>
		
		<main>
			<section id="resultat_recherche">
				<?php
					$search = $_GET['search'];
					$search = str_replace(' ', '', $search);
					$requete =  $bdd->prepare('SELECT * FROM autocompletion WHERE CONCAT(last_name, first_name) LIKE :search');
					$requete->execute(array('search' => '%'.$search.'%'));
					$nombre = $requete->rowCount();
					$array = array();

					echo '<h5 class="block_resultat_recherche">Environ ', $nombre, ' résultats</h5>';
				
					while($data = $requete->fetch())
					{
						$name = $data['last_name'].' '.$data['first_name'];
						echo '
							<div class="block_resultat_recherche">
								<a href="element.php?id=', $data['id'], '">', $name, '</a>
								<h5>', $data['city'], ', ', $data['country'], '</h5>
							</div>
						';
					}
				?>
			</section>
		</main>
	</body>
</html>