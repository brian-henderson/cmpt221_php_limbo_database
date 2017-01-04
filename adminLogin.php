
<!DOCTYPE html>
<html>
    <head>
        <title>Limbo Admin </title>
        <link href="css/main.css" type="text/css" rel="stylesheet"/>
        <link href="css/admin.css" type="text/css" rel="stylesheet"/>
    </head>
    
<body>
    <div id = "header">
        <header> Marist College Limbo</header>
    </div>
    
   <ul>
       <li><a href="limbo-landing.php">Home</a></li>
       <li><a href="lost.php">Lost</a></li>
       <li><a href="found.php">Found</a></li>
       <li><a href="quicklinks.php">Quicklinks</a></li>
       <li style="float:right"><a href="adminLogin.php">Admin Login</a></li>
   </ul>
       <div id = "message">
        <div id = "messageT1"> Admin Login </div>
        <br>
    </div>
<?php
# Connect to MySQL server and the database
require( 'includes/connect_db.php' ) ;

require( 'adminLoginCheck.php' ) ;

if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {

	$username = $_POST['username'] ;
    $password = $_POST['psw'] ;

    if( !validate($username, $password) ) {
      echo '<P style=color:red>Login failed please try again.</P>' ;
    } else {
      ob_start();
           $message = "Successful Login!";
	       echo "<script type='text/javascript'>alert('$message');</script>";
           header("Location: admin.php");
      exit();
	  ob_end_flush();
    }
}
?>
<!-- Get inputs from the user. -->
<form action="adminLogin.php" method="POST">
<table>
    <tr>
        <td>User Name:</td><td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td>User Password:</td><td><input type="password" name="psw"></td>
    </tr>
    <tr>
        <td><input type="submit" id="submitbtn" ></td>
    </tr>
</table>
</form>
</body>
</html>

