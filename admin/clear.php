<HTML>
<HEAD><TITLE>Clear database</TITLE></HEAD>
<BODY>
<?PHP
		// Remove PDF (ID CARDS)
		array_map('unlink', glob("./pdfs/*"));
		// Reset .txt file database 
        $myfile = fopen("../list.txt", "w") or die("Unable to open file!");
		$txt = "\n";
		fwrite($myfile, $txt);
		print "All gone.";


?>
</BODY>
</HTML>