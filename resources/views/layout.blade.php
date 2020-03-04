<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
	<title>Blog</title>
	<link href="{{ URL::asset('css/bootstrap.css') }}" rel='stylesheet'/>
	<link href="{{ URL::asset('css/style.css') }}" rel='stylesheet'/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet' type='text/css'>
</head>
<body>

<div class="header clearfix">  
    <div class="container clearfix">
        <div class="logo">
            <a href="http://project.ru/"><img src="{{ URL::asset('img/logo.jpg') }}" title="" /></a>
        </div>
        <div class="top-menu">
            <div class="search">
                <form>
                    <input type="text" placeholder="" required="">
                    <input type="submit" value=""/>
                </form>
            </div>
            <span class="menu"></span> 
            <ul>
                <li class="active"><a href="http://project.ru/">HOME</a></li>						
                <li><a href="about.php">ABOUT</a></li>	
                <li><a href="contact.php">CONTACT</a></li>						
                <div class="clearfix"> </div>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="content">
	<div class="container">
		<div class="content-grids">
		 					
			@yield('content')
			
            <!-- Sidebar -->
		</div>
	</div>
</div>
<!---->
<div class="footer">
	<div class="container">
	<p>Copyrights © 2015 Blog All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>

</body>