<?php
$con = mysqli_connect("localhost","id7573453_avaity","password@1","id7573453_mylogin");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
session_start();
function check_input($value)
{
    $con = mysqli_connect("localhost","id7573453_avaity","password@1","id7573453_mylogin");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
// Stripslashes
if (get_magic_quotes_gpc())
  {
  $value = stripslashes($value);
  }
// Quote if not a number
if (!is_numeric($value))
  {
  $value = "'" . mysqli_real_escape_string($con,$value) . "'";
  }
return $value;
}




// Make a safe SQL
$user = check_input($_POST['username']);
$pwd = check_input($_POST['password']);
$sql = "SELECT * FROM users WHERE
email=$user AND pass=$pwd";

$qury =mysqli_query($con, $sql);
$result = mysqli_fetch_array($qury);
 
      if($result[0]>0)
      {
          header("Refresh:2; url=homee.html");
       // header("Location: student/studenthome.html");
        echo"WELCOME TO OUR BABY WORLD!";
      $_SESSION['username']= $user;
    echo "<br />Welcome ".$_SESSION['username']."!";

      }
      else
      {
            header("Refresh:2; url=myloginpage.html");
        echo "Login Failed";
        echo "<br />Redirecting to Registration Page ";
        
      }

mysqli_close($con);
?>
