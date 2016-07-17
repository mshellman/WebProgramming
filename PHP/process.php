<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Author" content="Megan Shellman">
  <meta name="Description" content="The Fit Quiz" />
  <title>The Fit Quiz</title>
  <link rel="stylesheet" href="../CSS/question.css">
</head>
<?php

	$fid = $_GET['id'];

?>
<body>
<div id="forms">



<?php

	session_start();
	$question = $_SESSION['question'];
	$answer1= $_POST['answerOne'];
	$answer2= $_POST['answerTwo'];
	$answer3= $_POST['answerThree'];
	$answer4= $_POST['answerFour'];
	$answer5= $_POST['answerFive'];
	$answer6= $_POST['answerSix'];
	$answer7= $_POST['answerSeven'];
	$answer8= $_POST['answerEight'];
	$score = 0;

	switch ($question) {
     case "1":
	 	if ($answer1 == "D" || "C"){$score++;}
		if ($answer2 == "B"){$score++;}
		if ($answer3 == "C"){$score++;}
		if ($answer4 == "B" || "A"){$score++;}
		if ($answer5 == "C" || "D"){$score++;}
		if ($answer6 == "A"){$score++;}
		if ($answer7 == "A" || "B"){$score++;}
		if ($answer8 == "A" || "B"){$score++;}
         break;
     case "2":
	 	if ($answer1 == "A"){$score--;}
		if ($answer2 == "A"){$score--;}
		if ($answer3 == "A"){$score--;}
		if ($answer4 == "E"){$score--;}
		if ($answer5 == "A"){$score--;}
		if ($answer6 == "C"){$score--;}
		if ($answer7 == "D"){$score--;}
		if ($answer8 == "D"){$score--;}
         break;
     case "3":
	 	if ($answer1 == "B" || "C"){$score = $score;}
		if ($answer3 == "B"){$score = $score;}
		if ($answer4 == "C" || "D"){$score = $score;}
		if ($answer5 == "B"){$score = $score;}
		if ($answer6 == "B"){$score = $score;}
		if ($answer7 == "C"){$score = $score;}
		if ($answer8 == "C"){$score = $score;}
         break;
     default:
         echo "Nothing";
}

	if ($score < 0){

	echo "<h2>You are not living a healthy lifestyle, you should check out the rest of this site for useful resources to begin living a fit life.</h2>";
}
	?>
	<?php
	if ($score == 0){

	echo "<h2>You live a semi-active lifestyle, but you could implement some small lifestyle chagnes to begin living the fit life.</h2>";
}
	?>
	<?php
	if ($score > 0) { echo "<h2>Congratulations! You are already living a fit life!</h2>";
  }
	?>
	<?php

	 echo "<center><font face='Berlin Sans FB' size='12'>Your Score is <br/> $score/10</font></center><br><br><br>"; ?>


	 <div class="button">
	 <form action='fitquiz.html' >
	 <input type="submit" name="submit" class="submit" value="RESTART"/>
	</form>
	<div>

</body>
</html>
