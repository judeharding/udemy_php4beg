<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<section class="content">

<aside class="col-xs-4">
	<?php Navigation();?>
</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

<?php
	/*  Step 1 -Make a variable with some text as value
	Step 2 - Use crypt() function to encrypt it
	Step 3 - Assign the crypt result to a variable
	Step 4 - echo the variable
	*/

	// WITH SALT & HASH
	// $somVar = "sometextasvalue";
	//
	// $hashFormat = "$2y$10$";
	// $salt = "iusesomecrazystrings22";
	// $hashF_and_salt = $hashFormat . $salt;
	// $cryptVar = crypt($somVar,$hashF_and_salt);
	//
	// echo $cryptVar;
	//
	// OR
	// ONLY salt
	$somVar = "sometextasvalue";
	$salt = "iusesomecrazystrings22";
	$cryptVar = crypt($somVar,$salt);

	echo $cryptVar;

?>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>
