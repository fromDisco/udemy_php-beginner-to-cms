<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<a href="9.php?id=10&kompliment='gut gemacht'">hier klicken</a>

		<?php 

			/*  Create a link saying Click Here, and set 
			the link href to pass some parameters and use the GET super global to see it*/
			if (isset($_GET['id'])) {
				echo $_GET['id'];
				echo $_GET['kompliment'];
			}
			
		// Step 2 - Set a cookie that expires in one week
			$id = "Tanja";
			$value = "mags wild";
			$expiration = time() + 60 * 60 * 24 * 7;
			setcookie($id, $value, $expiration);

			
		// Step 3 - Start a session and set it to value, any value you want.
			session_start();

			$_SESSION['maggi'] = "mag jedes Kind";
			var_dump($_SESSION);
	
	?>





	</article>
	<!--MAIN CONTENT-->
	<?php include "includes/footer.php"; ?>