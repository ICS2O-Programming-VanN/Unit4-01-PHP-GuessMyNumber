<html>
  <head>
    <!-- 	Meta Data	 -->
		<meta charset="UTF-8">
		<meta name="Van" content="My website in PHP">
		<meta name="keywords" content="immaculata, ics2o">
		<meta name="DESCRIPTION" content="Guessing Game, Using PHP">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <title>Guessing Game, Using PHP</title>
    <!-- Links to style.css file -->
		<link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
		<!-- Heading and paragraph -->
    <?php
			echo '<center><h1>Guessing Game, Using PHP</h1></center><br>';
			echo "<p>Enter your Guess below!</p>";
		?>
		<!-- Text field and button (Takes Input) -->
		<form method = "post">
      Guess: <input type="number" step="1" min="1" max="6" name="guess"> <br>
			<br><br>
			<input type ="submit" name ="submit"  value="Guess">
		<!-- Calculations for Fahrenheit to Celsius (With User Input) -->
		<?php
			if(isset($_POST['submit'])) { // When Button clicked
        if($_POST['guess'] != "") {
          $guess = $_POST['guess']; // Input for the Fahrenheit
  				$answer = rand(1, 6); // Calculations for Fahrenheit to Celsius

          if ($guess == $answer) {
            echo "<br><h4>You got the number correctly! The answer was " . $answer . "</h4>";
          } else {
            echo "<br><h4>You got the number wrong! The answer was " . $answer . "</h4>";
          }
        } else {
          echo "<h4>Please fill the guess box.</h4>";
        }
			}
		?>
  </body>
</html>


