<?php
header("Content-type: text/html; charset=utf-8"); 
$url = 'http://www.tuling123.com/openapi/api?key=1ee001f67460cb49725df2f53c9f0b84&info='.$_POST['input_text']; //在此替换key
$html = file_get_contents($url);  
$jsondata=json_decode($html,true);
if ($jsondata['code']<10001) {
  echo 'fail';
};
?>
<style type="text/css">
.typing{
    width:750px;
    white-space:nowrap;
    overflow:hidden;
    -webkit-animation: type 3s steps(50, end) ;
	animation: type 3s steps(50, end) ;
}


@-webkit-keyframes type{
    from { width: 0;}
}

@keyframes type{
    from { width: 0;}
}
</style><div class="typing"><?php echo $jsondata['text']; ?></div>