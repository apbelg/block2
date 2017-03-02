<?php
 require_once('function1.php');
 $masNameTest = getData(FILE_DATA);
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>

<body>
	<p><h2> Cписок тестов </h2></p>
<ol>
  <?php
     foreach ($masNameTest as $value) {
       foreach ($value as $value1) {
         echo '<li>'.$value1["NameTest"].'</li>';
       }
     } ?>
</ol>
</body>
</html>
