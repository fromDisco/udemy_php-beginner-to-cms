<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 

$var = 5.63;
$string = 'Wer hat an der Uhr gedreht?';
$array = [1, 3, 5, 289, 0252, 23994];

echo floor($var);
echo '<br>';
print_r(str_split($string, 5));
echo '<br>';
echo max($array);
echo '<br>';
echo min($array);

/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>