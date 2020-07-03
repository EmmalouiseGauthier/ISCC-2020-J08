<!DOCTYPE html>
<html>

<head>
<title>Cours PHP-J06-ex01</title>
<meta charset="utf-8">
</head>

<body>
<?php

foreach ($_GET as $key => $value) {
echo "<li>$key = $value</li>";
}
?>


</html>