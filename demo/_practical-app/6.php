<?php

	if (isset($_POST['submit'])) {
		if ($_POST['name'] != "") {
			echo $_POST['name'];
			echo '<br>';
			// echo isset($_POST['name']);
		} else {
			echo 'du hast den name vergessen';
		}
	}

?>

<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<form action="6.php" method="post">
	<input type="text" name="name" id="name">
	<input type="submit" name="submit">
</form> 

<?php  


/*  Step1: Make a form that submits one value to POST super global


 */

	
?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>