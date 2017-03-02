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
//    $data_test = [];
    if (file_exists($filename)) {
        $data_test = json_decode(file_get_contents($filename),true);
          if (!$data_test) {
            return [];
        }
    }
    return $data_test;
}
//
function  TestLoad()
{
       $jsonData = getData($_POST['filename']);
       if (!empty($jsonData)) {
           setData($jsonData);
       }

}
?>
