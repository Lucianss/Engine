<?
error_reporting(0);
if (!file_exists('inc/config.php')) {
    header('Location: install');
	exit; }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Nevo | Home</title>
<link rel="shortcut icon" href="favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Nevo Search Engine" />
<meta name="keywords" content="nevo, search, engine, free, web, web hosting, hosting"/>
<meta name="author" content="(c) Nevo" />
<link rel="stylesheet" type="text/css" href="cdn/css/default.css" />
<script src="loading/pace.js"></script>
<link href="loading/themes/pace-theme-minimal.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
</head>
<body>
  <header class="header">
    <nav>
      <ul>
        <li><div onmousedown="event.preventDefault ? event.preventDefault() : event.returnValue = false"><img src="cdn/img/toggle.png"></div></li>
      </ul>
    </nav>
  </header>
  <section class="content">
<div onmousedown="event.preventDefault ? event.preventDefault() : event.returnValue = false"><img src="cdn/img/nevo.png" width="270" height="95" alt="Nevo"><b>BETA</b></div>
    <form action="search.php" method="get" name="search" class="search">
      <input type="text" id="query" class="field" name="q" autocomplete="off" autofocus required>  
      <div onmousedown="event.preventDefault ? event.preventDefault() : event.returnValue = false"><img src="cdn/img/small.png"></div>
      <div class="btn-content">
         <button type="submit">Search Nevo</button>
    </div>
	</form>
	</section>
<footer>
  <div onmousedown="event.preventDefault ? event.preventDefault() : event.returnValue = false">
    <nav class="footer-nav-left">
      <ul>
        <li><a href="about" style="text-decoration: none">About</a></li>
        <li><a href="about/stats.php" style="text-decoration: none">Stats</a></li>
        <li><a href="about/bot.php" style="text-decoration: none">Bot</a></li>
      </ul>  
    </nav>
    <nav class="footer-nav-right">
      <ul>
        <li><a href="http://nevo.cf" style="text-decoration: none">&copy; Nevo</a></li>
      </ul>
    </nav>
   </div>
   </footer>
</body>