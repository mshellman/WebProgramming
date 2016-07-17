<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Author" content="Megan Shellman">
  <meta name="Description" content="The Fit Quiz Pro" />
  <title>The Fit Quiz</title>
  <link rel="stylesheet" href="../CSS/question.css">
</head>

<body>
  <?php

  session_start();
    $name = $_SESSION['name'];
    $_SESSION['type'] = "pro";

  ?>

  <div class="forms">

  <h1 color="black"><?php echo "Okay, $name, let's see how fit you are.";?></h1>
  </div>

  <?php

	echo "
<form action='process.php?id=1' method='post' id='quizForm' id='1'>

	<ul>
    	<li>
		<fieldset><legend>Question 1</legend>
        <h3>How often do you exercise?</h3>

        <div>
        <input type='radio' name='answerOne' id='answerOne' value='A' />
        <label for='answerOneA'>Almost never, or less than once a week</label>
        </div>

        <div>
        <input type='radio' name='answerOne' id='answerOne' value='B' />
        <label for='answerOneB'>Once a week</label>
        </div>

        <div>
        <input type='radio' name='answerOne' id='answerOne' value='C' />
        <label for='answerOneC'>2-3 times a week</label>
        </div>

		<div>
        <input type='radio' name='answerOne' id='answerOne' value='D' />
        <label for='answerOneD'>Almost every day</label>
        </div>
        </li>
		</fieldset>


        <li>
		<fieldset><legend>Question 2</legend>
        <h3>2.	How long is the average duration of your workout?</h3>

        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='A' />
        <label for='answerTwoA'>Under 30 Minutes</label>
        </div>

        <div>
        <input type='radio' name='answerTwo' id='answerTwo' value='B' />
        <label for='answerTwoB'>30 minutes or more</label>
        </div>
        </li>
		</fieldset>


        <li>
		<fieldset><legend>Question 3</legend>
        <h3>How hard do you train?</h3>

        <div>
        <input type='radio' name='answerThree' id='answerThree' value='A' />
        <label for='answerTwoA'>I take it easy, without breathing hard or sweating</label>
        </div>

        <div>
        <input type='radio' name='answerThree' id='answerThree' value='B' />
        <label for='answerTwoB'>Little hard breathing and/or sweating</label>
        </div>

        <div>
        <input type='radio' name='answerThree' id='answerThree' value='C' />
        <label for='answerTwoC'>I go all out</label>
        </div>
		</li>
		</fieldset>

		<li>
		<fieldset><legend>Question 4</legend>
        <h3>Thinking about your life at the moment, would you say that you by and large are satisfied with life, or are you mostly dissatisfied?</h3>

        <div>
        <input type='radio' name='answerFour' id='answerFour' value='A' />
        <label for='answerFourA'><span>Very Satisified</span></label>
        </div>

        <div>
        <input type='radio' name='answerFour' id='answerFour' value='B' />
        <label for='answerFourB'>Somewhat Satisified</label>
        </div>

        <div>
        <input type='radio' name='answerFour' id='answerFour' value='C' />
        <label for='answerFourC'>A bit of both</label>
        </div>

		<div>
        <input type='radio' name='answerFour' id='answerFour' value='D' />
        <label for='answerFourD'>Somewhat Dissatisifed</label>
        </div>

		<div>
        <input type='radio' name='answerFour' id='answerFour' value='E' />
        <label for='answerFourE'>Very Dissatisifed</label>
        </div>

        </li>
		</fieldset>

		<li>
		<fieldset><legend>Question 5</legend>
        <h3>About how often in the last 12 months did you drink alcohol? (do not include low-alcohol beer)</h3>

        <div>
        <input type='radio' name='answerFive' id='answerFive' value='A' />
        <label for='answerFiveA'>4-7 times a week</label>
        </div>

        <div>
        <input type='radio' name='answerFive' id='answerFive' value='B' />
        <label for='answerFiveB'>1-3 times a week</label>
        </div>

        <div>
        <input type='radio' name='answerFive' id='answerFive' value='C' />
        <label for='answerFiveC'>2-3 times a month</label>
        </div>

		 <div>
        <input type='radio' name='answerFive' id='answerFive' value='D' />
        <label for='answerFiveD'>Less than once a month/I do not drink</label>
        </div>
		</li>
		</fieldset>

		<li>
		<fieldset><legend>Question 6</legend>
        <h3>Do you take any dietary supplements?</h3>

        <div>
        <input type='radio' name='answerSix' id='answerSix' value='A' />
        <label for='answerTwoA'>Yes, often.</label>
        </div>

        <div>
        <input type='radio' name='answerSix' id='answerSix' value='B' />
        <label for='answerTwoB'>No.</label>
        </div>

        <div>
        <input type='radio' name='answerSix' id='answerSix' value='C' />
        <label for='answerTwoC'>Rarely</label>
        </div>
        </li>
        </fieldset>

        <li>
		<fieldset><legend>Question 7</legend>
        <h3>Do you eat a balanced diet?</h3>

        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='A' />
        <label for='answerTwoA'>Yes, often</label>
        </div>

        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='B' />
        <label for='answerTwoB'>Sometimes</label>
        </div>

        <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='C' />
        <label for='answerTwoC'>Rarely</label>
        </div>

		 <div>
        <input type='radio' name='answerSeven' id='answerSeven' value='D' />
        <label for='answerTwoD'>Never</label>
        </div>
        </li>
        </fieldset>

		<li>
		<fieldset><legend>Question 8</legend>
        <h3>Are you satisfied with your weight?</h3>

        <div>
        <input type='radio' name='answerEight' id='answerEight' value='A' />
        <label for='answerFourA'>Yes</label>
        </div>

        <div>
        <input type='radio' name='answerEight' id='answerEight' value='B' />
        <label for='answerFourB'>Sometimes</label>
        </div>

        <div>
        <input type='radio' name='answerEight' id='answerEight' value='C' />
        <label for='answerFourC'>Not often</label>
        </div>

		 <div>
        <input type='radio' name='answerEight' id='answerEight' value='D' />
        <label for='answerFourD'>No</label>
        </div>
        </li>
		</fieldset>

    </ul>

    <input type='submit' name='submit' class='submit' value='SUBMIT' />

	</form>"

?>
</div>
</body>
</html>
