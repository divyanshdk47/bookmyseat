
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$city=$_POST['city'];
$phno=$_POST['phno'];
$email=$_POST['email'];
$password=$_POST['pass'];


  mysql_connect("localhost","root","");
  mysql_select_db("bms");
  $query="SELECT * FROM client WHERE email='$email' AND password='$password' ";
  $result=mysql_query($query);
  $count=mysql_num_rows($result);


  if($count==0)
  {
    $query1="INSERT INTO client VALUES ('$fname','$lname','$city','$phno','$email','$password','none','none','none',0,0)";
    mysql_query($query1);
    echo "<script>
    alert('Registration done <br />Press OK to login');
    window.open('login.php','_self');
    </script>";
  }
  else{
    echo "<script>
    alert('Oops!! This Username Exist');
    window.open('signup.php','_self');
    </script>";

  }

  ?>
