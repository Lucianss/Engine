<?
error_reporting(0);
	$message = "";
	$error = "";

	if(isset($_GET['action']) && $_GET['action'] == "install"){
		$db_h = strip_tags($_POST['db_h']);
		$database = strip_tags($_POST['database']);
		$db_u = strip_tags($_POST['db_u']);
		$db_p = strip_tags($_POST['db_p']);
		
			if(mysql_connect($db_h,$db_u,$db_p)){
				if(mysql_select_db($database)){					
										
					if(mysql_query("CREATE TABLE IF NOT EXISTS `search` (`id` int(11) NOT NULL AUTO_INCREMENT,`title` varchar(255) NOT NULL,`description` varchar(255) NOT NULL,`url` text NOT NULL,`keywords` varchar(255) NOT NULL,PRIMARY KEY (`id`)) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;")){
						$message = 'Successfully installed! Please delete "install" folder!';
					}else{
						$error = 'Could not create tables.';	
					}
	
				}else{
					$error = 'Could not select database.';		
				}
			}else{
				$error = 'Could not connect to database.';	
			}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Install</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="container">

<?
	if(strlen($error) > 0){
		echo"<div id=\"error\">$error</div>";
	}
	if(strlen($message) > 0){
		echo"<div id=\"correct\">$message <a href='../remove.php' style='text-decoration: none'>Delete install folder</a></div>";
	}
?>
<div style="background:#fff;border:1px #efefef solid;padding:5px;border-radius:3px">
	<form action="?action=install" method="post" class="mnform">
	<fieldset>
		<legend>Database Config</legend>
		<div class="type-text">
			<label for="db_h">Database Host</label><br />
			<input type="text" name="db_h" id="db_h" placeholder="Host" style="height:28px;width:360px;margin-bottom:3px;" />
		</div>
		<div class="type-text">
			<label for="database">Database Name</label><br />
			<input type="text" name="database" id="database" placeholder="Database" style="height:28px;width:360px;margin-bottom:3px;" />
		</div>
		<div class="type-text">
			<label for="db_u">Database User</label><br />
			<input type="text" name="db_u" id="db_u" placeholder="User" style="height:28px;width:360px;margin-bottom:3px;" />
		</div>
		<div class="type-text">
			<label for="db_p">Database Password</label><br />
			<input type="password" name="db_p" id="db_p" placeholder="Password" style="height:28px;width:360px;margin-bottom:3px;" />
		</div>
	</fieldset>
	<div style="text-align:right"><input id="shorten" type="submit" name="submit" value="Install" /></div>
	</form>
</div>
</div>
</body>
</html>