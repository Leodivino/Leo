 
 <html>
 <head>
 <title>Leodivino A. Lawas</title>
 </head>
 <body>
 <h1>Welcome to my guessing game</h1>
 <p>
 <form method="GET">
 <h1>Lets Play</h1>
<p><label for= "guess">Input Guess</label>
<input type="text" name="guess" size="40" id="guess"/></p>
<input type="submit" name="submit"/>
</form>
<?php
 
 session_start();

 if(!isset($_GET['guess'])){
	 echo("Please Input Value");
	  $_SESSION["counter"] = 0;
 }else if (strlen($_GET['guess'])< 1 ) {
	 echo("<h1>Your Guess is too short</h1>"); 
	 $_SESSION["counter"]++;
 }else if ( ! is_numeric($_GET['guess'])) {
	 echo("<h1>Your Guess is not a number</h1>");
	 $_SESSION["counter"]++;
 }else if ($_GET['guess'] < 42) {
	 echo("<h1>Your Guess is too low</h1>");
	 $_SESSION["counter"]++;
 }else if ($_GET['guess'] > 42) {
	 echo("<h1>Your Guess is too high</h1>");
	 $_SESSION["counter"]++;
 } else{
	 echo("<h1>Congratulation - Your Right!!!</h1>");
	 unset($_SESSION["counter"]);
	 session_destroy();
 }
 if ($_SESSION["counter"]==5) 
 {
	echo "<h2>You have 5 tries already</h2>";
	echo "<h1>Game is over</h1>";
	unset($_SESSION["counter"]);
	session_destroy();
	echo "<h1><a href='index.php'>Play AGain</a></h1>"; 
 }	 
 ?>
 </p>
 </body>
 </html>
