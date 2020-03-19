<?php
$con=mysqli_connect("localhost","id7448723_omkarprojects","omkarprojects","id7448723_foodadda");
if ($con->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
           $rname = $_POST['rname'];
           $ing = $_POST['ing'];
           $steps = $_POST['steps'];
           $cat = $_POST['chk1'];
 $url = $_POST['url'];
         $author=$_POST['aname'];
           
        $sql = "INSERT into recipe(rname,url,ingredients,steps,cat,author) values('".$rname."','".$url."','".$ing."','".$steps."','".$cat."','".$author."')"; 
    
       
            if (mysqli_query($con, $sql)) {
                header("Refresh:3; url=allrecipe.php");
               
               echo "New recipe created successfully";
                                
            } else {
                header("Refresh:3; url=resub.html");
                    header('Location: allrecipe.php');
               echo "Error: " . $sql . "" . mysqli_error($con);
              
            }
           
 

        
 $con->close();
?>