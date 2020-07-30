<section id="header">
	<a id="lien_logo_tesla" href="index.php"><img alt="Logo Tesla" id="logo_tesla" src="Images/846588.png"/></a>
	<form id="form_recherche" method="get" action="recherche.php">
		<input type="text" name="search" id="barre_recherche" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" placeholder="Search"/>
		<button><img alt="Logo Tesla" src="Images/tesla_logo_PNG13.png" id="logo_tesla_2"/></button>
	</form>
</section>