<?php
$psuedo1="le psuedo";
$login="le login";
$p=$_POST["psuedo1"];
$l=$_POST["login"];
setcookie($psuedo,$p);
setcookie($login,$l);
echo $_COOKIE[$p];
echo $_COOKIE[$l];

session_start();
?>
<?php

echo "la variable SESSION age s'affiche ici :". $_SESSION["age"];

echo"<br><br>";

echo"voici votre psuedo ".$_POST["psuedo"]."<br>". "et votre mot de passe ".$_POST["pass"];


?>