<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	<?php

	/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
		Step 2: Make a forloop  that displays 10 numbers
		Step 3 : Make a switch Statement that test againts one condition with 5 cases
	 */

	 if(true){
		 echo "I love PHP". "<br>";
	 } elseif (1 > 2){
		 echo "PHP Sucks". "<br>";
	 } else {
		 echo "coffee". "<br>";
	 }
/* ~~~~~~~~~~ */
	for ($i=0; $i < 10; $i++) {
		echo $i . "<br>";
	}
/* ~~~~~~~~~~ */
	$num = 3;
	switch ($num) {
		case '1':
			echo "i am # 1";
			break;
		case '2':
			echo "i am # 2";
			break;
		case '3':
			echo "i am # 3";
			break;
		case '4':
			echo "i am # 4";
			break;
		case '5':
			echo "i am # 5";
			break;
		default:
			echo "i am no one";
			break;
	}
	?>




</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
