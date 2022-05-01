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
  

$Email =  $_POST['Email'];
$Passwordd = $_POST['Passwordd'];

        $Email = stripcslashes($Email);  
        $Passwordd = stripcslashes($Passwordd);  
        
  
$sql = "SELECT * FROM users WHERE Email = '$Email' and Passwordd ='$Passwordd' ";
  $result= mysqli_query($conn, $sql);

  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('Location: ../yes.html');  
        }  
        else{  
            echo "<h1>خطأ في البريد الالكتروني او الرقم السري </h1>";  
        }     

    
?>