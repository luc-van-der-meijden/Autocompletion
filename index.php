<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<title>Document sans titre</title>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
			$( function() {
				$('#recherche').autocomplete({
					source : 'liste.php'
				});
			});
		</script>
	</head>

	<body>
		<form method="get" action="recherche.php">
			<input type="text" name="search" id="recherche"/>
			<button>Rechercher</button>
		</form>
	</body>
</html>