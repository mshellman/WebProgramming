<?php
	function Redirect($level)
	{
		if($level == "0")
		{
			header("Location: couchPotato.php?level=".$level);
		}
		else if($level == "1")
		{
			header("Location: beginner.php?level=".$level);
		}
		else if($level == "2")
		{
			header("Location: pro.php?level=".$level);
		}
		exit;
	}
	$level = 0;
	if(isset($GET['value']))
	{
		$level = $_GET['value'];
	}
	Redirect($level);
?>