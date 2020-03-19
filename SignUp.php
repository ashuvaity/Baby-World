<?php
$name=filter_input(INPUT_POST,'username');
$email=filter_input(INPUT_POST,'email');
$pwd=filter_input(INPUT_POST,'password');
$disp="Go Back!";
if(empty($name))
{
  alert("Username Empty!");
  die($disp);
}
if(empty($email))
{
  alert("Username Empty!");
  die($disp);
}
if(empty($pwd))
{
  alert("Password Empty!");
  die($disp);
}
$servername = "localhost";
$username = "id7573453_avaity";
$password = "password@1";
$dbnm="id7573453_mylogin";

$conn = new mysqli($servername, $username, $password,$dbnm);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql1="Insert into users values(".$username.",".$email.","$password")";
$stmt = $conn->prepare("INSERT INTO users VALUES (?, ?, ?)");
$stmt->bind_param("sss", $v1, $v2, $v3);

$v1=$fname;
$v2=$email;
$v3=$pass;

if (!$stmt->execute()) {
    echo "Execute failed";
}
header('Location:index.html');
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>
