<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

<aside class="col-xs-4">
	<?php Navigation();?>
</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

<?php
/*  Step 1: Use the Make a class called Dog
Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color
Step 4: Make a method named ShowAll that echos all the properties
Step 5: Instantiate the class / create object and call it pitbull
Step 6: Call the method ShowAll
*/
?>

<?php
// step 1
	class Dog {
		var $eyeColor = "blue";
		var $furColor = "white";
		//
		function ShowAll(){
			echo $this->eyeColor . "<br>";
			echo $this->furColor;
		}
	}
$pitbull = new Dog();

echo $pitbull->ShowAll();

// if(class_exists("Dog")) {
// 	echo "YEayyyyyyyyy Nice";
// } else {
// 	echo "no";
// }
?>
</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
