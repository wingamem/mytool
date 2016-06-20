<?php
header("Content-type: text/html; charset=utf-8");
$phone=$_POST["phone"];
$url='http://api.46644.com/shouji/?shouji='.$phone;  
$html = file_get_contents($url);  
$jsondata=json_decode($html,true);
if ($jsondata['error']!=0) {
  echo '成功了';
  echo "<br>";
  echo "归属地:".$jsondata['msg'];
} else {
  echo '失败了';
  echo "<br>";
  echo "原因".$jsondata['msg'];
}
?>