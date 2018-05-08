<?PHP
require_once("./include/membersite_config.php");

$fgmembersite->LogOut();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Login</title>
      <link rel="STYLESHEET" type="text/css" href="membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <style>
          body{
            background: #333 url(images/gaming.jpg) repeat top left;  
            font-family:Arial;

          }
      </style>
</head>
<body>

<h4 align="center" position="center">You have logged out</h4>
<p align="center" >
	<a href='login.php'>Login Again</a>
</p>
<p align="center" >
	<a href='/index.html'>Home</a>
</p>

</body>
</html>