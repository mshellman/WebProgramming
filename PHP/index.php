<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="Author" content="Megan Shellman">
  <meta name="Description" content="The Fit Quiz" />
  <title>The Fit Quiz</title>
  <link rel="stylesheet" href="../CSS/question.css">
</head>

<body>
<?php
	$name = $_POST['name'];
	session_start();
  $_SESSION['name'] = $name;

?>

<div class="forms">

<h1 color="black"><?php echo "$name, which of these best describes you?";?></h1>
</div>
<table align="center">
  <td width="33%"> <a href="../PHP/couchPotato.php"><img src="../Photos/couch-potato.jpg"></a></td>
  <td width="33%"> <a href="../PHP/beginner.php"><img src="../Photos/beginner.jpg"></a></td>
  <td width="33%"> <a href="../PHP/pro.php"><img src="../Photos/pro.png"></a></td>
</table>
</div>
</body>
</html>
