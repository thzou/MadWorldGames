<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Profile Page</title>
      <!--<link rel="STYLESHEET" type="text/css" href="membersite.css"> -->
      <meta charset="utf-8">
  	  <meta name="viewport" content="width=device-width, initial-scale=1">
  	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style>

          body{
            
            font-family:Arial;
 			      background-image:url(images/map.jpg);

   			    background-repeat:no-repeat;

   			    background-size:cover;

          }
          p3{
          	color : #009933;
          	
          	
          }
          h2{
          	color: #009933;
          }


      </style>
</head>
<body>
<div class = "container">
<!--<h3>Home Page</h3>
Welcome back <?= $fgmembersite->UserFullName(); ?>!

<p><a href='change-pwd.php'>Change password</a></p>

<p><a href='access-controlled.php'>A sample 'members-only' page</a></p>
<br><br><br>
<p><a href='/index.html'>Logout</a></p> -->
	<ul class="nav nav-pills ">
		  <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
      <li><a href='access-controlled.php' target="_blank">Gaming Area</a></li>
		  <li><a href='change-pwd.php' target="_blank">Change password</a></li>
		  <li><a href='showdataPDO.php' target="_blank">ScoreBoard</a></li>
		  <li><a href='logout.php'>Logout</a></li>
	</ul>
	<div class="tab-content">
	  <div id="home" class="tab-pane fade in active">
	    <h2>Welcome back <?= $fgmembersite->UserFullName();?>!</h2>
	    
	  </div>
	  <div id="menu2" class="tab-pane fade">
	    <h3>Menu 2</h3>
	    <p>Some content in menu 2.</p>
	  </div>
	</div>
</div>
</body>
</html>
