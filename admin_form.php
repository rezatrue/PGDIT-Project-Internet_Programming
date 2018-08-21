
<div id="content">

<h1 style="text-align:center" >Admin Login</h1>

<form id="con_form" name="login" onsubmit="return verifylogin()" action="admin.php" method="get">
	<ul>
		<li><label for="username">User Name:</label></li>
		<li><input type="text" name="username" size="50" /><span id="errorUsernmaeMsg"></span></li>
		<li><label for="password">Password:</label></li>
		<li><input type="password" name="pass" size="50" /><span id="errorPassMsg"></span></li>
		
		<li><input type="submit" name="submit" value=" login " /></li>
	</ul>
</form>


</div>