<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Author" content="Megan Shellman">
  <meta name="Description" content="The Fit Quiz" />
  <title>The Fit Quiz</title>
  <link rel="stylesheet" href="question.css">
</head>

<body>
<?php
	$name = $_POST['name'];

	session_start();
  $_SESSION['name'] = $name;
	$_SESSION['question'] = $question;

?>

<div class="forms">

<h1 color="black"><?php echo "$name, which of these best describes you?";?></h1>
</div>
<table align="center">
  <td width="33%"> <a href="couchPotato.php"><img src="couch-potato.jpg"></a></td>
  <td width="33%"> <a href="beginner.php"><img src="beginner.jpg"></a></td>
  <td width="33%"> <a href="pro.php"><img src="pro.png"></a></td>
</table>
</div>
</body>
</html>
