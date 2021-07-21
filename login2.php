<?php
session_start();
$aa=$_POST['email'];
$bb=$_POST['pass'];

$_SESSION['email']=$aa;
$_SESSION['password']=$bb;

mysql_connect("localhost","root","");
mysql_select_db("bms");

$query="SELECT * FROM client WHERE email='$aa' AND password='$bb'";
$result=mysql_query($query);
$row=mysql_num_rows($result);

$query1="SELECT * FROM admin WHERE email='$aa' AND password='$bb'";
$result1=mysql_query($query1);
$row1=mysql_num_rows($result1);

if($aa==""||$bb=="")
{
	echo "<script>
		alert('Please Fill All','_self');
		open('login.php','_self');
	</script>";
	exit;
}
else
{
	if($row!=1)
	{
		echo "<script>
			window.alert('Wrong Password');
			open('login.php','_self');

		</script>";
	}

		else
		{
				if($row==0)
			{
				echo ' <script>
					window.alert("Register First");
					window.open("signup.php","_self");
				</script>';

			}

			else
			{

				echo ' <script>
					alert( "Welcome  '.$aa.' \n To continue press OK" ,"_self");
					open("bookmyseat.php","_self");
				</script>';

		}

}
}
?>
