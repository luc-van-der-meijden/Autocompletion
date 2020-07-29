<?php
	if($_GET['id'] != ''){}
	else
	{
		header('location: index.php');
	}
	
	include('connexionsql.php');
    $requete = 'SELECT * FROM autocompletion WHERE id='.$_GET['id'];
    $data = $bdd->query($requete)->fetch();
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo $data['last_name'], ' ', $data['first_name']; ?></title>
	</head>

	<body id="element">
    <main>
        <div id="info">
            <p>You're currently viewing the profile of  <?php echo $data['first_name'];?> <?php echo $data['last_name'];  ?></p>

            <p>If you want to send him a message use the following mail :   <?php echo $data['email']; ?></p>
            <p>It's a <?php echo $data['gender']?> </p>
            <p>He lives in <?php echo $data['country']?></p>
            <p>In the city of <?php echo $data['city']?></p>
            <p>He enjoys driving in <?php echo $data['car_make']?> in model <?php echo $data['car_model']; ?> wich was established in  <?php echo $data['car_model_year']; ?></p>

        </div>

    </main>
	</body>
</html>