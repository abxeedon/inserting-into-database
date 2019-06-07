<?php
include"connection.php";
if (isset($_POST["submit"] ) ) {
	#set all variables to empty by default
	$username = $email = $password = "";
	#form names at d laft side
	$username=($_POST["username"] );
	$email=($_POST["email"] );
    $password=($_POST["password"] );


    if ($username && $password && $email) {
    	$query="INSERT INTO users (id, username, password, email)
VALUES(NULL, '$username', '$password', '$email')";
    if (mysqli_query($conn, $query) ) {
	    echo"new record added";
	# code...
    }else{
	    echo"error: ". $query . "<br>" . mysqli_error($conn);
    }

	
}
}


?>
<form action="index.php" method="POST">
	<input type="text" name="username">
	<input type="text" name="email">
	<input type="password" name="password">
	<input type="submit" name="submit" value="submit">
</form>