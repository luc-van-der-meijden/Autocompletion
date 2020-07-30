<?php
	if($_GET['id'] != ''){}
	else
	{
		header('location: index.php');
	}
	
	include('connexionsql.php');
	
	$query = 'SELECT * FROM autocompletion WHERE id='.$_GET['id'];
	$data = $bdd->query($query)->fetch();
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" media="screen" href="style.css"/>
		<link rel="icon" type="image/png" href="Images/tesla_logo_PNG13.png"/>
		<title><?php echo $data['last_name'], ' ', $data['first_name']; ?></title>
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
			<section id="element">
				<section id="element_info">
					<img alt="Logo Tesla" id="element_logo" src="Images/tesla_logo_PNG13.png"/>
					<div>
						<h2><?php echo $data['first_name'], ' ', $data['last_name']; ?></h2>
						</br>
						<h4><?php echo $data['gender']; ?></h4>
						</br>
						<h1><?php echo $data['email']; ?></h1>
						</br>
						<h3><?php echo $data['country'], ' ', $data['city']; ?></h3>
						</br>
						<h4>Actual Car: <?php echo $data['car_make'], ' ', $data['car_model'], ' in ', $data['car_model_year']; ?></h4>
					</div>
				</section>
			</section>
				
		</main>
	</body>
</html>