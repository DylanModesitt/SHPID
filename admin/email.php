<HTML>
	<HEAD>
		<TITLE>Email</TITLE>
	</HEAD>

	<BODY>
		<H1>Email</H1>
<?php

require_once('E:\php\kmo_gmail_mail_helper.php');

$lines = file('../list.txt');

// Loop through our array, show HTML source as HTML source; and line numbers too.
foreach ($lines as $line) 
{
	$line_contents = explode(",", $line);
	$email = $line_contents[0];
	$code = $line_contents[1];
	
// For admin use only	
	print "<P>$line</P>";
	print "$email<BR>$code<BR>";
	
	$message = "Your code is $code.  Have a nice day.";
	
	if (mail_gmail($email ,"Here is your code" ,$message,"kmorris@shschools.org", "Kevin Morris"))
		{
			print "<P><FONT SIZE=-3><I>Mail sent.</I></FONT></P>";
		}
		else
		{
			print "<P><FONT SIZE=-3><I>No mail sent.</I></FONT></P>";
		}
}
    
?>