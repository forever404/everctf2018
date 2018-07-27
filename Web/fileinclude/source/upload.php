<!DOCTYPE html>  
<html>  
<head>  
    <title>文件信息</title>  
</head>  
<meta charset="utf-8">  
<body>  
<form action="" enctype="multipart/form-data" method="POST" name="uploadfile">  
    上传文件: <input type="file" name="upfile" />  
    <input type="submit" value="上传" name="submit">  
</form>  
</body>  
</html>  
<?php  
if (isset($_POST['submit'])) {  
    // var_dump($_FILES['upfile']);  
    echo "文件名：".$_FILES['upfile']['name']."<br />";  
    //echo "文件大小：".$_FILES['upfile']['size']."<br />";  
    //echo "文件类型：".$_FILES['upfile']['type']."<br />";  
    // echo "临时路径：".$_FILES['upfile']['tmp_name']."<br />";  
    echo "上传后系统返回值：".$_FILES['upfile']['error']."<br />";  
    // echo "====================保存分各线========================<br />";  
    $flag = 0;  
    $path_parts = pathinfo($_FILES['upfile']['name']);  
    // echo '---<br>';  
    // var_dump($path_parts);    //返回文件路径信息  
    if ($path_parts['extension'] == 'png' && $_FILES['upfile']['type'] == 'image/png') {  
        $flag = 1;  
    }else{  
        die("只允许上传png类型");  
    }  
    if ($_FILES['upfile']['error'] == 0 && $flag ) {  
        if (!is_dir("./upload")) {  
            mkdir("./upload");  
        }  
        $dir = "./upload/".md5($_FILES['upfile']['name'].time()).".png"; 
        $uploadstr =  file_get_contents($dir);
    if(strstr($uploadstr,'$'))
        echo "检测到有害输入".'</br>'.$uploadstr;
    else
    {
        echo "文件保存路径：".$dir."<br />";  
        move_uploaded_file($_FILES['upfile']['tmp_name'],$dir);  
        echo "上传成功<br />";   
    }
        // echo "<img src=".$dir.">";  
    }  
}  
?>  
