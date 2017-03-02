<?php
    require_once('function1.php');
    if (isset($_POST['filename']))
     {
        TestLoad();
      }
?>
<!DOCTYPE html>
<html>
    <head>
         <meta charset="UTF-8">
         <title>Отправка тестов на сервер</title>
    </head>
         <body>
             <form method = "POST">
                 <br><br>
                 <label> Имя файла: </label>  <input type = "text" name="filename" placeholder="test1.json"><br><br>
                 <button type = "submit">Отправить</button>
             </form>
         </body>
</html>
