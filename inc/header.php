<html>
<head>
<title>Nevo</title>
<link href='../cdn/css/all.css' async='async' rel='stylesheet'/>
<link href='../cdn/css/index.css' async='async' rel='stylesheet'/>
<link href='../cdn/css/search.css' async='async' rel='stylesheet'/>
<link href='https://fonts.googleapis.com/css?family=Ubuntu' async='async' rel='stylesheet'/>
<meta name='description' content="Nevo Search Engine"/>
<div class='header'>
<a class='logo' href='../index.php'><strong>Nevo</strong></a>
<form method='GET' action='../search.php' class='searchForm'>
<input id='query' type='text' placeholder='Search a website' autocomplete='off' name='q' value="<?php if(isset($_GET['query'])) echo $_GET['q'] ?>"/>
<button><svg viewBox='0 0 100 100' class='shape-search'><use xlink:href='#shape-search'></use></svg></button>
</form>
</div>
</head>
