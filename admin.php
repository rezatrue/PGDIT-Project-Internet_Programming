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
		}
		else
		{
			echo "<h6 style="."text-align:center;color:red"." >wrong user name or password</h6>";
			include_once("admin_form.php");
		}
		
	}
	
	
	if(!isset($_SESSION["user"])){
		include_once("admin_form.php");
	}
	else {
	
	if($_SESSION["user"] == "admin"){
		echo "<h1 style="."text-align:center"." >Welcome Admin </h1>";

		echo "<h1 style="."text-align:center"." ><a href="."contact_list.php"." >Contact List</a> </h1>";
			
		echo "<h2 style="."text-align:center"." ><a href="."signout.php"." > Sign out </a> </h2>";
		
	}
	
	}
	
	
		
	?>
	

    </div>

<?php

include_once("footer.php");

?>
