<?php 
/*

*/

if(isset($_POST["submit"]) && isset($_FILES["fileToUpload"]["name"]))
{

if ($_FILES["fileToUpload"]["size"] > 5000000) {
echo "dosya cok buyuk!";
exit;
}

$file=$_FILES["fileToUpload"]["tmp_name"];
$filename=$_FILES["fileToUpload"]["name"];


$myfile = fopen($file, "r");
$data = fread($myfile, filesize($file));
fclose($myfile);

$str = mb_convert_encoding($data, "utf-8", "Windows-1254");

header('Cache-control: public');
header('Content-Type: application/octet-stream');
header('Content-Length: ' . strlen($str));
header('Content-Disposition: attachment; filename=' . $filename);
flush();
echo $str;
exit;
}

?>

<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
    Encoding file:
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" value="Encoding file" name="submit">
</form>

</body>
</html>
