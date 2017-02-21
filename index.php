<html>
<body>

<?
//Print link before content
 if (!strpos($_SERVER[HTTP_USER_AGENT],"Google"))  //Check if not google, hide for users
									   	{ echo "<a href=/nope.php style='position:absolute;top:-99px;pointer-events:none;opacity:0'>admin</a>"; }
?>
<h1>Your Website</h1>
