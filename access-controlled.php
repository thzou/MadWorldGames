<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Personal Gaming Area</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Slide Down Box Menu with jQuery and CSS3" />
        <meta name="keywords" content="jquery, css3, sliding, box, menu, cube, navigation, portfolio, thumbnails"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <style>
			body{
				
				background: #333 url(images/gaming3.jpg) repeat right;   
				font-family:Arial;
				background-size: cover;
				
				
			}
			span.reference{
				position:fixed;
				left:10px;
				bottom:10px;
				font-size:12px;
			}
			span.reference a{
				color:#aaa;
				text-transform:uppercase;
				text-decoration:none;
				text-shadow:1px 1px 1px #000;
				margin-right:30px;
			}
			span.reference a:hover{
				color:#ddd;
			}
			ul.sdt_menu{
				margin-top:150px;
			}
			h1.title{
				text-indent:-9000px;
				background:transparent url(images/logo.png) no-repeat top left;
				width:600px;
				height:90px;
			}
		</style>
    </head>

    <body>
		<div class="content">
			<h1 class="title">Online Gaming Platform</h1>
			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="#">
						<img src="images/madteam.png" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link" href="login-home.php">Home</span>
							<span class="sdt_descr">Logged in as: <?= $fgmembersite->UserFullName() ?></span>
						</span>
					</a>
					<div class="sdt_box">
						<a href="login-home.php">Profile</a>
						<p>Hello <?= $fgmembersite->UserFullName() ?> .What's up ? Have fun and spend your time gaming!</p>
					</div>
				</li>
			
				<li>
					<a href="/faultyPlane">
						<img src="images/faultyplanenew.png" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">F-Plane</span>
							<span class="sdt_descr">Description</span>
						</span>
					</a>
					<div class="sdt_box">
						
						<p>Your plane has a faulty engine.You have to fly it ! Be carefull , not to crush!</p>
						
					</div>
					
				</li>
				<li>
					<a href="/AlienInvasion">
						<img src="images/aliens.png" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">ET-Invasion</span>
							<span class="sdt_descr">Description</span>
						</span>
					</a>
					<div class="sdt_box">
						
						<p>You are under attack! Aliens want to kill you! Protect yourself! Kill them all!</p>
						
					</div>
				</li>
				<li>
					<a href="/Hubble's_Quest">
						<img src="images/hubble.png" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Hubble's-Q</span>
							<span class="sdt_descr">Description</span>
						</span>
					</a>
					<div class="sdt_box">
						
						<p>You are the Hubble! You have to avoid the barnacles and the other enemies! Jump over them ! Be sure to check the superpowers,that are given from the mushrooms!</p>
						
					</div>
				</li>
				<li>
					<a href="/SpaceWar2">
						<img src="images/spacewar.png" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">SpaceWar</span>
							<span class="sdt_descr">Description</span>
						</span>
					</a>
					<div class="sdt_box">
						
						<p>Your spaceship is under attack from aliens-spaceships! Defend your spaceship! Inhibit Them!</p>
						
					</div>				
				</li>
				
			</ul>
		</div>

        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
				/**
				* for each menu element, on mouseenter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li').bind('mouseenter',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'170px',
							'height':'170px',
							'left':'0px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'140px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '170px';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-170px';
							$sub_menu.show().animate({'left':left},200);
						}	
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25px'},500);
				});
            });
        </script>
    </body>
</html>

