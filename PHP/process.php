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
	<h1> Your Guide to Fit and Fabulous</h1>

<hr>



<div id="navbar">

    <table id="tab">

        <tr>

		<td class="box"><a href="home.html">Home</a></td>

        <td class="box"><a href="recipes.html">Recipes</a></td>

        <td class="box"><a href="exercises.html">Exercises</a></td>

		<td class="box"><a href="fitquiz.html">The Fit Quiz</a></td>

        </tr>

    </table>

</div>

<hr>



<br/>
<div id="forms">




<?php

	session_start();
	$score = 0;
	$answer1= $_POST['answerOne'];
	$answer2= $_POST['answerTwo'];
	$answer3= $_POST['answerThree'];
	$answer4= $_POST['answerFour'];
	$answer5= $_POST['answerFive'];
	$answer6= $_POST['answerSix'];

	switch ($fid) {
     case "0":
     	$score = 10;
	 		if ($answer1 == "D" || "C")
		{
			$score++;
		}else{
			$score--;
		}
	if ($answer2 == "B")
		{
			$score++;
		}else
		{
			$score--;
		}
	if ($answer3 == "C")
		{
			$score++;
		}else if($answer3 == "D" || $answer3 == "E")
		{
			$score--;
		}
	if ($answer4 == "B" || "A")
		{
			$score++;
		}else
		{
			$score--;
		}
	if ($answer5 == "C" || "D")
		{
			$score++;
		}
	if ($answer6 == "A"){$score++;}
         break;
     case "1":
     $score = 20;
	 	if ($answer1 == "A"){$score--;}
		if ($answer2 == "A"){$score--;}
		if ($answer3 == "A"){$score--;}
		if ($answer4 == "E"){$score--;}
		if ($answer5 == "A"){$score--;}
		if ($answer6 == "C"){$score--;}
		if ($answer7 == "D"){$score--;}
		if ($answer8 == "D"){$score--;}
         break;
     case "2":
     $score = 30;
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

	if ($score >= 0 && $score <=15){

	 echo '<center><img src="../Photos/badResult.jpg"></center>';
    echo "<h2>You are not living a healthy lifestyle, you should check out the rest of this site for useful resources to begin living a fit life.</h2>";
  echo 'Here is a list of links to check out to get into healthier habits:
    <ul>
    <li><a href="http://www.health.com/health/gallery/0,,20668027,00.html">http://www.health.com/health/gallery/0,,20668027,00.html</a></li>
    <li><a href="http://zenhabits.net/getting-healthy/">http://zenhabits.net/getting-healthy/</a></li>
    <li><a href="http://www.mindbodygreen.com/0-14078/26-ridiculously-easy-ways-to-be-healthy.html">http://www.mindbodygreen.com/0-14078/26-ridiculously-easy-ways-to-be-healthy.html</a></li>
    <li><a href="http://greatist.com/grow/easy-health-tips-busy-lifestyles">http://greatist.com/grow/easy-health-tips-busy-lifestyles</a></li>
    </ul>
  ';
}
	?>
	<?php
	if ($score >= 16 && $score <= 25){

	echo '<center><img src="../Photos/okayResult.jpg"></center>';
  	echo "<h2>You live a semi-active lifestyle, but you could implement some small lifestyle chagnes to begin living the fit life.</h2>";
  echo 'Here is a list of links to check out to keep you in shape:
  <ul>
  <li><a href="http://www.livestrong.com/article/172891-how-to-keep-your-body-in-good-shape/">http://www.livestrong.com/article/172891-how-to-keep-your-body-in-good-shape/</a></li>
  <li><a href="http://www.healthbeckon.com/simple-tips-to-maintain-a-slim-body/">http://www.healthbeckon.com/simple-tips-to-maintain-a-slim-body/</a></li>
  <li><a href="http://www.empathogen.net/2012/12/how-to-maintain-your-perfect-body-shape-using-the-regular-exercise/">http://www.empathogen.net/2012/12/how-to-maintain-your-perfect-body-shape-using-the-regular-exercise/</a></li>
  </ul>
  ';
}
	?>
	<?php
	if ($score >= 26 && $score <= 40) {
	 echo "<h2>Congratulations! You are already living a fit life!</h2>";
	echo '<center><img src="../Photos/greatResult.jpg"></center>';
    echo 'Here is a list of links to check out to get even bigger:
    <ul>
    <li><a href=""></a></li>
    <li><a href=""></a></li>
    </ul>
    ';
  }
  ?>
	


	 <div class="button">
	 <form action='fitquiz.html' >
	 <input type="submit" name="submit" class="submit" value="RESTART"/>
	</form>
	<div>

</body>
</html>
