<?php
	session_start();
	$mail=$_POST['email'];
	$password=$_POST['pass'];


	if($mail=="" || $password=="")
	{
		echo"Fill all";
		echo "<a href='login.php'>Click here to go back</a>";
	}
	else
	{
		mysql_connect("localhost","root","");
		mysql_select_db("bks");
		$query="SELECT * FROM client WHERE email='$mail' AND password='$password' ";
		$result=mysql_query($query);
		$row=mysql_num_rows($result);
		if($row!=0)
		{
			$_SESSION['email']=$mail;
			header ("location:bookmyseat.php");
		}
		else
		{
			echo "Mismatch";
			echo "<a href='login.php'>Click here to go back</a>";
		}
	}
?>
