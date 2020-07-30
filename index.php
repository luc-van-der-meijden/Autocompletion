<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" media="screen" href="style.css"/>
		<link rel="icon" type="image/png" href="Images/tesla_logo_PNG13.png"/>
		<title>Client Tesla</title>
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
		<main>
			<section id="recherche_index">
				<section id="recherche_index_barre">
					<img alt="Logo Tesla" src="Images/c8-1-e1580761617879.png" id="logo_tesla_1"/>
					<form id="form_recherche" method="get" action="recherche.php">
						<input type="text" name="search" id="barre_recherche"/>
						<button><img alt="Logo Tesla" src="Images/tesla_logo_PNG13.png" id="logo_tesla_2"/></button>
					</form>
				</section>
			</section>
		</main>
	</body>
</html>