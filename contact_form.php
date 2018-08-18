
<div id="content">
<h1 style="text-align:center" >Contact Me</h1>

<form id="con_form" name='contact' onSubmit="return verify();  ">
	<ul>
		<li><label for="username">Name:</label></li>
		<li><input type="text" name="username" size="50" /><span id="errorUsernmaeMsg"></span></li>
		<li><label for="email">Email:</label></li>
		<li><input type="text" name="email" size="50" /> <span id="errorEmailMsg"></span></li>
		<li><label for="subject">Subject:</label></li>
		<li><input type="text" name="subject" size="50" /><span id="errorSubjMsg"></span></li>
		
		<li><label for="msg">Message:</label></li>
		<li><textarea name="msg" id="msg"></textarea><span id="errorMsgMsg"></span></li>
		<li><input type="submit" name="submit" value="Submit"  /></li>
	</ul>
</form>
</div>