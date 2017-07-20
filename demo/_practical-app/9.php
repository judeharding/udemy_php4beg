<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<?php session_start();
	$_SESSION['msg'] = "hi crazybitch";
?>
<section class="content">

<aside class="col-xs-4">
	<?php Navigation();?>
</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

<?php
/*  Create a link saying Click Here, and set
the link href to pass some parameters and use the GET super global to see it
Step 2 - Set a cookie that expires in one week
Step 3 - Start a session and set it to value, any value you want.
*/
?>
<!-- step 1 -->
<?php
	if(isset($_GET["id"])){
		echo $_GET["id"] . "<br>";
	}
?>

<a href="9.php?id=7">click here</a>
<br>
<!-- step 2 -->

<?php
$exp = time() + (60*60*24*7);
setcookie('theNAME','ThisIsTheValue',$exp);
?>
<?php
	if(isset($_COOKIE["theNAME"])){
		$someOne = $_COOKIE["theNAME"];
		echo $someOne;
	}

	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
	}
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>
