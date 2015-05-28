<?php $index="";include("login.php");?>
<title>Nevo | Login</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
if(isset($_POST['username']) && isset($_POST['password'])){
 $ushahs="0b2e5d5a151b5ae199eba215427f64db080a669db4b6f7e136081b9d2093e977962bf9809a7a34f604230255ce9f278163ad2373c807b394bf060f5a22d32bfa";
 $hashed="4d4577432ef282b65acf70032b9280f09aacb3d511fb21e7d54d8096be3bd7f1469c294d69c6db9bced6365c1be498255c8dd5e0f5c1273c1c4cee6274d01466";
 if(hash("sha512", $_POST['password'])==$hashed && hash("sha512", $_POST['username'])==$ushahs){
  $_SESSION['itsok']=1;
  header("Location: home.php");
 }else{
  echo "Not OK";
 }
}
?>
<section class="container">
<div class="login">
<form action="" method="POST">
 <input type="text" name="username" placeholder="Username"/>
 <input type="password" name="password" placeholder="Password"/>
<p align="center"><input type="submit" name="submit" value="Login"></p>
</form>
</section>
</div>