<?php

include_once("header.php");

?>


    <div id="content_header"></div>
    <div id="site_content">
    
	<?php

	include_once("sidebar_content.php");

	?>

	<?php
	
	
	if(isset($_REQUEST["username"]) && isset($_REQUEST["pass"]))
	{
		if($_REQUEST["username"] == "admin" && $_REQUEST["pass"] == "123")
		{
			$_SESSION["user"] = "admin";
			//header('Location: userlist.php');
			
			echo "<h2 style="."text-align:center"." >Welcome Admin here's contact list : ".
			"<span style="."text-align:right"." ><a href="."signout.php"." > Sign out </a> </span></h2>";

			echo "<h1 style="."text-align:center"." > Contact List in here</h1>";
			
			
			$cn = mysql_connect ("localhost","root","");
			if ( !$cn)
			{
				die("could not connect".mysql_error());
			}
			else
			{
				//echo "connected to the server successfully";
			}
			
			mysql_select_db("pgdit1815",$cn);
			
			$q ="SELECT * FROM contact_list";
			//* = All
			$mq = mysql_query($q,$cn);
			echo "<div text-align= 'center'>"; 
			echo "<table text-align= 'center' border='1'><tr><th>SL. NO.</th><th>Name</th><th>Email</th><th>Subject</th><th>Message</th></tr>";
			while($row = mysql_fetch_array($mq))
			{
				echo "<tr><td>";
				echo $row['slno'] . "</td><td> " . $row['name']. "</td><td> " . $row['email']. "</td><td> " . $row['subject']. "</td><td> " . $row['message'];
				echo "</td></tr>";
			}
			echo "</table>";
			echo "</div>";
			mysql_close($cn);
			
			
			
			
			
			
			
			
		}
		else
		{
			echo "<h6 style="."text-align:center;color:red"." >wrong user name or password</h6>";
			include_once("admin_form.php");
		}
		
	}
	else
		{
			include_once("admin_form.php");
		}
		
	?>
	

    </div>

<?php

include_once("footer.php");

?>
