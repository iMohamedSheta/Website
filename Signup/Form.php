<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "excpetional-db";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}
  
$FirstName =  $_REQUEST['FirstName'];
$LastName = $_REQUEST['LastName'];
$Email =  $_REQUEST['Email'];
$Passwordd = $_REQUEST['Passwordd'];
$PhoneNumber = $_REQUEST['PhoneNumber'];
  
$sql = "INSERT INTO users  VALUES ('$FirstName', 
    '$LastName','$Email','$Passwordd','$PhoneNumber')";
  
if(mysqli_query($conn, $sql)){
    header('Location: ../yes.html');


  /*  echo nl2br("\n$FirstName\n $LastName\n "
        . "$Email\n $Passwordd\n $PhoneNumber");
        */
} else{
    echo "خطأ في الاتصال " 
        . mysqli_error($conn);
}
  
mysqli_close($conn);
?>
