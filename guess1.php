 <?php
 
 session_start();

 if(!isset($_GET['guess'])){
	 echo("Please Input Value");
	  $_SESSION["counter"] = 0;
 }else if (strlen($_GET['guess'])< 1 ) {
	 echo("Your Guess is too short"); 
	 $_SESSION["counter"]++;
 }else if ( ! is_numeric($_GET['guess'])) {
	 echo("Your Guess is not a number");
	 $_SESSION["counter"]++;
 }else if ($_GET['guess'] < 42) {
	 echo("Your Guess is too low");
	 $_SESSION["counter"]++;
 }else if ($_GET['guess'] > 42) {
	 echo("Your Guess is too high");
	 $_SESSION["counter"]++;
 } else{
	 echo("Congratulation - Your Right!!!");
	 unset($_SESSION["counter"]);
	 session_destroy();
 }
 if ($_SESSION["counter"]==5) {
	echo "<br><h2>You have 5 tries already</h2></br>";
	echo "<h1>Game is over</h1>";
	unset($_SESSION["counter"]);
	session_destroy();
	echo "<a href='guess1.php'>Play AGain</a>"; 
	
 }	 
 ?>
 <html>
 <head>
 <title>Leodivino A. Lawas</title>
 </head>
 <body>
 <h1>Welcome to my guessing game</h1>
 
 <p>
 <form method="GET">
 <br>Lets Play</br>
<p><label for= "guess">Input Guess</label>
<input type="text" name="guess" size="40" id="guess"/></p>
<input type="submit" name="submit"/>
</form>

 </p>
 </body>
 </html>