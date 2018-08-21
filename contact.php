<?php

include_once("header.php");

?>

    <div id="content_header"></div>
    <div id="site_content">
    
	<?php

	include_once("sidebar_content.php");

	?>

		<?php
		
		if(isset($_REQUEST["username"]) && isset($_REQUEST["email"]) && isset($_REQUEST["subject"]) && isset($_REQUEST["msg"]))
		{
			$nam = $_REQUEST["username"];
			$ema = $_REQUEST["email"];
			$sub = $_REQUEST["subject"];
			$msg = $_REQUEST["msg"];
			
			
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
			
			$q ="INSERT INTO contact_list (name, email, subject, message)
				VALUES ('". $nam ."', '". $ema ."', '". $sub ."', '". $msg ."')";
				
			
			//echo $q;
			
			$mq = mysql_query($q,$cn);
			if (!$mq)
			{
				echo "Could not inserted data".mysql_error();
			}
			else
			{
				//echo "data inserted successfuly";
			}
			mysql_close($cn);

			
		}
		
		
		?>

    <?php

	include_once("contact_form.php");

	?>  
	  
    </div>

<?php

include_once("footer.php");

?>
