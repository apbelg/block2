<?php
define('FILE_DATA', __DIR__ . '/all_tests.json');
//
function setData($inputData)
{
    if (file_exists(FILE_DATA)) {
        $data = getData(FILE_DATA);
       }
    $data[] = $inputData;
    if(file_put_contents(FILE_DATA, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT))) {
       return true;
       } else {
      return false;
        }
}
//
function getData($filename)
{
    $data_test = [];
    if (file_exists($filename)) {
        $data_test = json_decode(file_get_contents($filename),true);
          if (!$data_test) {
            return [];
          }
        return $data_test;
    }
}
//
function  TestLoad()
{
       $jsonData = getData($_POST['filename']);
       if (!empty($jsonData)) {
           setData($jsonData);
       }

}
//
function getResult($NomTest)
{
  $result=[];
  $masNameTest = getData(FILE_DATA);
  if ( isset($NomTest) ){
     if ( isset($masNameTest) ){
        $i=1;
       foreach ($masNameTest as $value) {
          foreach ($value as $value1) {
             if ($i == $NomTest){
                $k=0;
                foreach ($value1['Questions'] as $valueQuestions) {
                    $result[$k] = $valueQuestions['Result'];
                    $k++;
                }
              }
              $i++;
           }
        }
      }
   }
 return $result;
}
function showTest($masNameTest)
{
 if (isset($_GET['NomTest'])) {
  $nomTest = $_GET['NomTest'];
  $strTest = '';
  if ( isset($nomTest) ){
      if ( isset($masNameTest) ){
       $i=1;
        foreach ($masNameTest as $value) {
          foreach ($value as $value1) {
            if ($i == $nomTest){
               $strTest = $strTest.'<h5>'.$value1['NameTest'].'</h5>';
               foreach ($value1['Questions'] as $valueQuestions) {
                  $strTest = $strTest.'Вопрос № '.$valueQuestions['NumberQuestion'].' '.$valueQuestions['Question'].'<br>';
                   $arrAnswer = $valueQuestions['Answer'];
                   $strTest = $strTest.' Ответы : '.$arrAnswer[0].'   '.$arrAnswer[1].'   '.$arrAnswer[2].'  '.'<br>';
               }
            }
            $i++;
          }
        }
      }
    }
 return $strTest;
 }
}
?>
