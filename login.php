<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	
	<body>
	
	<p><?php 
		$db_handle = mysqli_connect("localhost","iw3htp","password");
		// Connect to MySQL
		if (!($database = $db_handle))
			die( "Could not connect to database </body></html>" );
		// open database to be queried
		if(mysqli_select_db($db_handle,"finaldb"))
			print "Connected to Database.";
	?></p>
	
	<p><?php
	
		$uname = $_POST["uname"];
		$pass = $_POST["pass"];
		
		$selectQuery = "SELECT firstname,lastname FROM auth WHERE username='".$uname."' AND password='".$pass."';";
		
		
		// open database
		if ( !mysqli_select_db( $database, "finaldb" ) )
			die( "Could not open products database </body></html>" );
		
		// query database
		if ( !( $result = mysqli_query( $database,$selectQuery ) ) ){
			print( "<p>Incorrect query</p>" );
			die( mysqli_error($database) . "</body></html>" );
		} 
		
		/*$result = mysqli_query($database,$selectQuery);
		  $numrows = mysql_num_rows($result);
		
	   	  if ($numrows = 0) 
			  print "wrong username or password";
		  else 
			  print "Welcome."; 
		*/ 
		print "Welcome."; 
		
		mysqli_close( $database );	
		
	?></p>		
	</body>
</html>