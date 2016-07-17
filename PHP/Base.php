<?php
function Redirect($level)
	{
		if($level == "0")
		{
			header("Location: couchPotato.php");
		}
		else if($level == "1")
		{
			header("Location: ../beginner.html");
		}
		else if($level == "2")
		{
			header("Location: pro.php");
		}
		exit;
	}
class Base
{
	$score = 0;
	$level = 0;
	if(isset($GET['value']))
	{
		$level = $_GET['value'];
	}
	Redirect($level);
}
?>