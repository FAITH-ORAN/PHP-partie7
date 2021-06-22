<?php
$psuedoCook="faiza";
$loginCookie="moi";

session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
echo "<h3 style='color:red;'>exercice 1</h3><br>";
echo "le nom de User agent est :3". $_SERVER['HTTP_USER_AGENT'] ."<br/>";
echo"l'adresse IP est :". $_SERVER["SERVER_ADDR"]."<br/>";//adresse IP du serveur
echo"le nom du serveur est". $_SERVER["SERVER_NAME"]."<br/>";//le nom du serveur 

echo "<h3 style='color:red;'>exercice 2</h3><br>";
 echo $_SESSION["prenom"]="Faiza";
 echo"<br>";
 echo $_SESSION["nom"]="Berrichi";
     $_SESSION["age"]=34;

 echo "<h3 style='color:red;'>exercice 3</h3><br>";
$page=fopen("target.php","a+");
fclose($page);

?>

<a href="target.php">lien</a>

<h3 style='color:red;'>exercice 4</h3>


<form method="post" action="target.php">
<label for="psuedo">Entrez psuedo: </label>
<input type="text" name="psuedo" id="psuedo">
<label for="pass">Entrez votre mot de passe: </label>
<input type="password" name="pass" id="password">
<input type="submit" value="envoyer">
</form>

<h3 style='color:red;'>exercice 5/6</h3>
<!--cet exercice je ne l'ai pas mis dans une même page il est sur la page object.php-->

<form method="post" action="object.php">
<label for="psuedo">Entrez psuedo: </label>
<input type="text" name="psuedo1" id="psuedo">
<label for="pass">Entrez votre login: </label>
<input type="text" name="login" id="password">
<input type="submit" value="envoyer">
</form>