<?php
session_start();
?>
<?php

echo "la variable SESSION age s'affiche ici :". $_SESSION["age"]=34;

echo"<br><br>";

echo"voici votre psuedo ".$_POST["psuedo"]."<br>". "et votre mot de passe ".$_POST["pass"];


?>