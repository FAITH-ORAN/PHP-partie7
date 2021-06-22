<?php
$psuedo="nom";
$p=$_POST["psuedo1"];
setcookie($psuedo,$p,time()+3600,"/");

echo "le psuedo entré est ".$_COOKIE[$psuedo]." il est stocké dans une cookie";
echo "<br>";
$login="login";
$l=$_POST["login"];
setcookie($login,$l,time()+3600,"/");
echo "le login entré est ".$_COOKIE[$login]." il est stocké dans une cookie";
?>