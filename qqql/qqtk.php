<?php
$qqnum = $_POST['qqnum'];
$qqurl = 'tencent://message/?uin='.$qqnum.'&Menu=yes';
echo '您要对话的QQ号是'.$qqnum.'<br>需要已经安装QQ,并且对方打开了临时对话';
?>
<p><a href='<?php echo
"$qqurl" ?>'>确定</a></p>