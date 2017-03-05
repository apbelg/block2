<?php
 require_once('function1.php');
 $masNameTest = getData(FILE_DATA);
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Тесты</title>
</head>

<body>
  <div class = "adminka">
    <nav>
      <ul>
        <li><a href="admin.php" > Загрузка тестов </a> </li>
        <li><a href="test.php" > Просмотр теста </a> </li>
      </ul>
    </nav>
  </div>
	<p><h2> Cписок тестов </h2></p>
  <?php
   if ( isset($masNameTest) ){
    echo '<ol>';
     foreach ($masNameTest as $value) {
       foreach ($value as $value1) {
         echo '<li>'.$value1["NameTest"].'</li>';
       }
     }
    echo '</ol>';
   }
 ?>
</body>
</html>
