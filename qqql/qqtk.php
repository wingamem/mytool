<?php
$qqnum = $_POST['qqnum'];
$qqurl = 'tencent://message/?uin='.$qqnum.'&Menu=yes';
echo '��Ҫ�Ի���QQ����'.$qqnum.'<br>��Ҫ�Ѿ���װQQ,���ҶԷ�������ʱ�Ի�';
?>
<p><a href='<?php echo
"$qqurl" ?>'>ȷ��</a></p>