<!DOCTYPE html>

<html>
<head>
	<title>Handle File Upload</title>
</head>
<body>
    <h1>File Upload Test</h1>

    <?php

header('Content-Type:text/html;charset=utf-8');
//构建上传文件信息
function getFiles(){
    $i=0;
    $files=array();
    
    foreach($_FILES as $file){
        //因为这时$_FILES是个三维数组，并且上传单文件或多文件时，数组的第一维的类型不同，这样就可以拿来判断上传的是单文件还是多文件
        //如果是单文件
          //  print $file['name'];
            $files[$i]=$file;
            $i++;
    }
    
    return $files;
}
//针对于单文件、多个单文件、多文件的上传
//默认允许上传的文件只为图片类型，并且只有这些图片类型:$allowExt=array('jpeg','jpg','png','gif');并且检查上传的文件是否为真实的图片$flag=true
//默认上传保存的文件夹为本地的'uploads'文件夹，允许上传文件的大小最大为2M

function uploadFile($fileInfo,$path='./files',$flag=true,$allowExt=array('jpeg','jpg','png','gif'),$maxSize=2097152){
     $res=array();
    //判断错误号
    if($fileInfo['error']===UPLOAD_ERR_OK){
        //检测上传文件的大小
        if($fileInfo['size']>$maxSize){
            $res['mes']=$fileInfo['name'].'上传文件过大';
        }
        $ext=getExt($fileInfo['name']);
        //检测上传文件的文件类型
        if(!in_array($ext,$allowExt)){
            $res['mes']=$fileInfo['name'].'非法文件类型';
        }
        //检测是否是真实的图片类型
        if($flag){
            if(!getimagesize($fileInfo['tmp_name'])){
                $res['mes']=$fileInfo['name'].'不是真实图片类型';
            }
        }
        //检测文件是否是通过HTTP POST上传上来的
        if(!is_uploaded_file($fileInfo['tmp_name'])){
            $res['mes']=$fileInfo['name'].'文件不是通过HTTP POST方式上传上来的';
        }
        if( $res ) return $res; //如果要不显示错误信息的话，用if( @$res ) return $res;
        //$path='./uploads';
        //如果没有这个文件夹，那么就创建一
        if(!file_exists($path)){
            mkdir($path,0777,true);
            chmod($path,0777);
        }
        //新文件名唯一
        $uniName=$fileInfo['name'];
        $destination=$path.'/'.$uniName;
        //@符号是为了不让客户看到错误信，也可以删除
        if(!@move_uploaded_file($fileInfo['tmp_name'],$destination)){
            $res['mes']=$fileInfo['name'].'文件移动失败';
        }
        $res['mes']=$fileInfo['name'].'上传成功';
        $res['dest']=$destination;
        return $res;
    }else{
        //匹配错误信息
        //注意！错误信息没有5
        switch($fileInfo['error']){
            case 1:
                $res['mes'] = '上传文件超过了PHP配置文件中upload_max_filesize选项的值';
                break;
            case 2:
                $res['mes'] = '超过了HTML表单MAX_FILE_SIZE限制的大小';
                break;
            case 3:
                $res['mes'] = '文件部分被上传';
                break;
            case 4:
                $res['mes'] = '没有选择上传文件';
                break;
            case 6:
                $res['mes'] = '没有找到临时目录';
                break;
            case 7:
                $res['mes'] = '文件写入失败';
                break;
            case 8:
                $res['mes'] = '上传的文件被PHP扩展程序中断';
                break;
        }
        return $res;
    }
}
?>
    </body>
</html>