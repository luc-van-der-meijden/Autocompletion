<?php
	if($_GET['id'] != ''){}
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
		<title><?php echo $data['last_name'], $data['first_name']; ?></title>
	</head>

	<body>
		
	</body>
</html>