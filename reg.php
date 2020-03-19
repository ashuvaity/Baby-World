<?php
$con=mysqli_connect("localhost","id7573453_avaity","password@1","id7573453_mylogin");
if ($con->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
           $name = $_POST['fname'];
           $email = $_POST['email'];
           $addr = $_POST['addr'];
           $pin = $_POST['pin'];
           $mobn = $_POST['mobno'];
           $dob = $_POST['dob'];
           $gender = $_POST['opt1'];
           $pass =($_POST['pass1']);
 $sql1 = "INSERT into users(name,email,addr,pin,mobn,dob,gender,pass) values('".$name."','".$email."','".$addr."','".$pin."','".$mobn."','".$dob."','".$gender."','".$pass."')"; 
           
        
      
            if (mysqli_query($con, $sql1)) {
               echo "New record created successfully please click bellow link for sign in";
                  echo "<br /><a href='myloginpage.html'>SignIn</a>";
            } else {
               echo "Error: " . $sql1 . "" . mysqli_error($con);
                echo "<br /><a href='SignIp.php'>SignUp</a>";
                  echo "<br /><a href='myloginpage.html'>SignIn</a>";
            }
           
 

        
 $con->close();
?>