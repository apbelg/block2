<?php
   require_once('function1.php');
   $masNameTest = getData(FILE_DATA);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Содержание теста</title>
</head>

<body>
  <div class = "adminka">
    <nav>
      <ul>
        <li><a href="admin.php" > Загрузка тестов </a> </li>
        <li><a href="list.php" > Список тестов </a> </li>
        </ul>
    </nav>
  </div>
  <form method = "GET">
      <br><br>
      <label> Введите номер теста: </label>  <input type = "text" name="NomTest" placeholder="1"><br><br>
      <button type = "submit">Отправить</button>
   </form>

  	<p><h2> Содержание теста </h2></p>

  <?= showTest($masNameTest); ?>
 <form method = "GET">
 <br><br>
     <label> Ответ на 1-й вопрос: </label>  <input type = "text" name="Result1"><br><br>
     <label> Ответ на 2-й вопрос: </label>  <input type = "text" name="Result2"><br><br>
     <input type = "hidden" name = "NomTest" value="<?= $_GET['NomTest'] ?>">
     <button type = "submit">Ответить</button>
  </form>
<?php
if (isset($_GET['NomTest'])) {
  $resultTest = getResult($_GET['NomTest']);
  if ( isset($_GET['Result1']) && isset($_GET['Result2'])  ){
       if ($_GET['Result1'] == $resultTest[0] && $_GET['Result2'] == $resultTest[1]){
         echo '<br>'.' Поздравляю! Вы прошли тест .'.'<br>';
       }
      else {
        echo '<br>'.' Увы! К сожалению, вы не прошли тест. '.'<br>';
      }
  }
}
?>
</body>
</html>
