<?
error_reporting(0);
if (!file_exists('inc/config.php')) {
    header('Location: install');
	exit; }
?>
<?php include("inc/header.php");?>
  <div class="container">
   <center>
    <h1>Nevo</h1>
    <form class="searchForm" action="search.php" method="GET">
     <input type="text" autocomplete="off" name="q" id="query"/>
     <div>
      <button>
       <svg class='shape-search' viewBox="0 0 100 100" class='shape-search'><use xlink:href='#shape-search'></use></svg>
      </button>
     </div>
    </form>
   </center>
  </div>
<?php include("inc/footer.php");?>
 </body>
</html>
