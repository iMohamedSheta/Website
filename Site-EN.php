<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptional - Sign up</title>
    <link rel="stylesheet" href="Css1.css">
</head>
<body>
    <div class="DivNumber1">
        <form>
        <h1>Create New Account</h1>

            <label for="FirstName">    <b>First Name</b>   </label>
            <input type="text" placeholder="Type Your First Name" name="FirstName" required >

            <label for="LastName">      <b>Last Name</b>    </label>
            <input type="text" placeholder="Type Your Last Name" name="LastName" required >

            <label for= "Email">        <b>Email</b>  </label>
            <input type="email" placeholder="Type Your Email" name="Email"  required >

            <label for="Password">      <b>Password</b>     </label>
            <input type="password" placeholder="Type Your Password" name="Password" required >

            <label for="Phone">     <b>Phone Number</b>   </label>
            <input type="tel" placeholder="Type Your Phone Number" name="Phone" >
            <div class="Buttons">
                 <button type="submit">Sign up</button>
            
                 <button class="CancelButton" type="button">Cancel</button>
            </div>

        </form>
        
    </div>
    
</body>
</html>

