<!DOCTYPE html>
<html>
<head>
<title>Vitrine</title>
<meta charset="utf-8">
<link href="style/vitrine.css">
</head>

<?php
include "header.php";

if($_GET["page"]== "Accueil") {
include "vitrine-accueil.php";
}

elseif ($_GET[page]== "programme") {
include "vitrine-programme.php";
}

elseif ($_GET[page]== "contacts") 
{
include "vitrine-contact.php";
}

else {

}
include "footer.php";
?>
</html>