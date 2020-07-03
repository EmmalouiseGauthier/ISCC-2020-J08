<!DOCTYPE html>
<title> mini-site-routing </title>
<html>

<a href="http://localhost:8888/ISCC-2020-J08/EX_01/mini-site-routng.php?page=Accueil">Accueil</a>; <br>
<a href="http://localhost:8888/ISCC-2020-J08/EX_01/mini-site-routng.php?page=Page2">Page 1</a>; <br>
<a href="http://localhost:8888/ISCC-2020-J08/EX_01/mini-site-routng.php?page=Page3">Page 2</a>;
</nav>
<?php

if ($_GET ["page"]== 1) {
echo "<h1>Accueil !</h1>";
} 
else if ($_GET ["page"]== 2) {
echo "<h1>Page 2 !</h1>";
} 
else if ($_GET ["page"]== 3) {
echo "<h1>Page 3 !</h1>";

}
?>
</html>