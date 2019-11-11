

<?php
require_once('db_function.php');
require"DBDA.class.php";

               
?>
<!DOCTYPE html>
<html>
<head>
	<title>Handle File Upload</title>
</head>
<body>
    <h1>File Upload Test</h1>
<?php
    // Include our Upload class
    require_once "Upload.php";
    $SID=$_REQUEST['SID'];
    $ID=$_REQUEST['ID'];
    
    $label=$_GET['flabel'];
    $target_dir = "files/"; 
    $select3 = array( 'name'=>$_POST['name'],'startday'=>$_POST['startday'],'endday'=>$_POST['endday'],'starttime'=>$_POST['starttime'],'endtime'=>$_POST['endtime']);
    $select4= array( 'ID' => $ID,'week'=>  $_GET['XID']);
    update("week", $select3, $select4);//修改week表
    $text1=$_POST['checkbox']; 
    $select5 = array( 'ID' => $ID,'week'=> $_GET['XID']);
    $result5 = select("week", $select5);
    $select6 = array( 'ID' => $ID,'label'=>$result5[0]['filelabel']);
    $result6 = select("file", $select6);
    
    for($i=0;$i<count($text1);$i++) //删除file表
    { 
        $yourwant = $text1[$i]; 
        unlink($result6[$yourwant]['route']);
         $db=new DBDA();
        $sql = "DELETE FROM file WHERE route='{$result6[$yourwant]['route']}'";        
        $a=$db->query($sql);
        echo $yourwant."<br/>"; 
    } 
   
                
         //file增加
   
    // Try the following:
    try {
        // Instantiate a new Upload object
        $upload = new Upload('file1');

        // Get the upload file's information
        $origFileName = $upload->getOrigFileName();
        $fileExt = $upload->getFileExt();
        $fileSize = $upload->getFileSize();
        $mimeType = $upload->getMimeType();

        // Print the upload file's information
    //    print "Original File Name: $origFileName<br>\n";
    //    print "File Extension: $fileExt<br>\n";
    //    print "Mime Type: $mimeType<br>\n";
    //    print "File Size: $fileSize<br>\n";

		if(!is_dir($target_dir) && !mkdir($target_dir)){
			die("error creating folder $targer_dir"); 
		}

        // Create a destination and name for the file
        $destFilePath = $target_dir .  $origFileName;
        //保存到数据库中
       // print $dest;
        session_start();
        require_once('DBDA.class.php');
        $dbda = new DBDA();
        $count=$dbda->query("select count(*) from file", 1);
       // $where=array('ID'=> $count[0]['count(*)'], 'route'=>$dest,'label'=>0);//学生的作业编号为0
        $dbda->query("insert into file values('{$ID}','{$destFilePath}','{$label}')",0);
        // Move that file to the destination
        $upload->moveFile($destFilePath);

        ?><script language="JavaScript">;alert("submit successfully!");location.href="changeunit.php?ID=<?php echo $ID ?>&SID=<?php echo $SID ?>&XID=<?php echo  $_GET['XID'] ?>";</script>; <?php
        // Provide a link to that destination
       

        // If that file was a jpg or gif image, print an image tag displaying that file
        if ($fileExt == 'jpg' || $fileExt == 'gif' || $fileExt == 'png') {
            print "<p><img src='$destFilePath' alt='uploaded image'></p>\n";
        }

    } catch (UploadExceptionNoFile $e) {
        print "No file was uploaded.<br>\n";
    } catch (UploadException $e) {
        $code = $e->getCode();
        $message = $e->getMessage();
        print "Error: $message (code=$code)<br>\n";
    }
?>
</body>
</html>
