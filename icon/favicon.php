<?
$target_path = "uploads/"; //上传文件夹
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); //获取上传文件名
$_FILES['uploadedfile']['tmp_name'];

$extensions = array("JPG","jpg","JPEG","jpeg"); //文件类型

$check = $target_path;

$explosion = explode(".", $check); //打散数组
$name = $explosion[0]; 
$extension = $explosion[1];

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {

if (!in_array($extension, $extensions)) {
echo  "你需要上传一个文件";
unlink ($target_path); //释放链接
} else {

    echo "生成ico成功<Br>";
$im = imagecreatefromjpeg($target_path);
list($width, $height) = getimagesize($target_path);
$image_p = imagecreatetruecolor("16", "16");
imagecopyresampled($image_p, $im, 0, 0, 0, 0, "16", "16", $width, $height);
$num = rand (1,99999); //生成随机数
$output = $num."-favicon.ico";
imagepng($image_p,$output);
imagedestroy ($im);
echo "<a href = \"../icon/$output\"><img src = \"../icon/$output\"></a><br>请保存为.ico文件,并保存在目录下";
unlink ($target_path);
}

} else{
    header("Location:../ico/1.php?errinfo=请上传一个文件");
}

?>