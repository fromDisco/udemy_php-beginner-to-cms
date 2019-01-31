<?php include "functions.php";?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php
$name = 'Michel';

if ($name == 'Karl') {
	echo 'uiuiui';
} elseif ($name == 'Ute') {
	echo 'ohoho';
} else {
	echo 'I love PHP';
}

echo '<br>';

for ($i = 0; $i < 10; $i++) {
	echo $i . '<br>';
}

echo '<br>';

switch ($name) {
	case 'Winfried':
		 echo 'alter Schwede';
		break;
	case 'Ute':
		 echo 'tut mir Leid';
		break;
	case 'MaxUndMoritz':
		 echo 'aua';
		break;
	case 'Michel':
		 echo 'Treffer';
		break;
	
	default:
		echo 'kein Treffer';
		break;
}

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

Step 2: Make a forloop  that displays 10 numbers

Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php";?>