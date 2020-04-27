<!-- MODEL -->
<?php            
$oldguess='';
$msg=false;

if(isset($_POST['guess'])) 
{
	$oldguess=$_POST['guess']; 
	
	if(strlen($oldguess)<1)
		$msg= "Please enter a number.";
	else if(!is_numeric($oldguess))
		$msg= "Your guess is not a number.";
	else if($oldguess<33)
		$msg= "Your guess is too low.";
	else if($oldguess>33)
		$msg= "Your guess is too high.";
	else
		$msg= "Congratulations! - You guessed it right!";
}
?>

<!-- VIEW -->

<html>				
<head>
	<title>Revin Raina</title>
</head>
<body style="text-align: center;">

	<h1>GUESSING GAME</h1>
	<h3>Hint: It's between 1-100</h3>
	<?php 
	if($msg!==false)
		echo "<p>$msg</p>";
	?>

	<form method="post">
		<p>
			<label for="guess">Enter your guess: </label>
			<input type="text" name="guess" id="guess" value="<?= htmlentities($oldguess)?>">
		</p>
		<input type="submit" value="Submit">
	</form>
	
</body>
</html>