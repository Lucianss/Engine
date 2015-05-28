<?php $home="";include("login.php");?>
<title>Nevo | Crawl</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<section class="container">
<div class="login">
<form method="POST">
 <input type="text" name="url[]" placeholder="URL1" size="50"/><br/>
 <input type="text" name="url[]" placeholder="URL2" size="50"/><br/>
 <input type="text" name="url[]" placeholder="URL3" size="50"/><br/>
 <input type="text" name="url[]" placeholder="URL4" size="50"/><br/>
<p align="center"><input type="submit" name="submit" value="Crawl"></p>
</form>
</section>
</div>
<?php
if(isset($_POST['url']) && array_search("", $_POST['url'])===false){
 $crawlToken=418941;
 $url4Array=$_POST['url'];
 print_r($url4Array);
 include("../crawl.php");
}
?>