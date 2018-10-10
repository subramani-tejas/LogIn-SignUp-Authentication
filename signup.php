<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Form Validation</title>
		
	</head>
	<body>
	<p> <?php print "Hi ".$_POST["firstname"]." ".$_POST["lastname"]; ?> </p>
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
		$insertQuery = "INSERT INTO auth (username,password,firstname,lastname,email,phone) VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["firstname"]."','".$_POST["lastname"]."','".$_POST["email"]."','".$_POST["phone"]."');";                     

		$selectQuery = "SELECT * FROM auth";

		// open database
		if ( !mysqli_select_db( $database, "finaldb" ) )
			die( "Could not open products database </body></html>" );

			
		// query database
		if ( !( $result = mysqli_query( $database,$insertQuery ) ) ){
			print( "<p>Could not execute query!</p>" );
			die( mysqli_error($database) . "</body></html>" );
		} 
		// success
		print "You are registered now.";
		
		// query database
		if ( !( $result = mysqli_query( $database,$selectQuery ) ) ){
			print( "<p>Could not execute query!</p>" );
			die( mysqli_error($database) . "</body></html>" );
		} 
		mysqli_close( $database );
	?></p>
		
		
		<!-- printing -->
		<table>
			<caption>Results:</caption>
			<?php
			// fetch each record in result set
			while ( $row = mysqli_fetch_row( $result ) ){
				// build table to display results
				print( "<tr>" );
				foreach ( $row as $value )
				print( "<td>$value</td>" );
				print( "</tr>" );
			} 
			?>
		</table>
		
	
	</body>
</html>