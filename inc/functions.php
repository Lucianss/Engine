<?php
include("config.php");

session_start();
$GLOBALS['q']=isset($_GET['q']) ? htmlspecialchars(urldecode(urlencode($_GET['q']))):"";
$GLOBALS['displayQ']=$GLOBALS['q'];
$GLOBALS['q']=strtolower($GLOBALS['q']);
$GLOBALS['p']=isset($_GET['p']) && is_numeric($_GET['p']) ? $_GET['p']:1;
$GLOBALS['dbh']=$dbh;

function htmlFilt($s){
 $s=str_replace("<", "&lt;", $s);
 $s=str_replace(">", "&gt;", $s);
 return $s;
}
/* Results */
function getResults(){
 $q=$GLOBALS['q'];
 $p=$GLOBALS['p'];
 $start=($p-1)*10;
 if($q!=null){
  $starttime = microtime(true);
  $sql=$GLOBALS['dbh']->prepare("SELECT `title`, `url`, `description` FROM search WHERE `title` LIKE :q OR `url` LIKE :q OR `description` LIKE :q ORDER BY id");
  $sql->bindValue(":q", "%$q%");
  $sql->execute();
  $trs=$sql->fetchAll(PDO::FETCH_ASSOC);
  $endtime = microtime(true);
  if($sql->rowCount()==0 || $start>$sql->rowCount()){
   return 0;
  }else{
   $duration = $endtime - $starttime;
   $res=array();
   $res['count']=$sql->rowCount();
   $res['time']=round($duration, 4);
   $limitedResults=array_slice($trs, $start, 10);
   foreach($limitedResults as $r){
    $res["results"][]=array($r['title'], $r['url'], $r['description']);
   }
   return $res;
  }
 }
}
?>