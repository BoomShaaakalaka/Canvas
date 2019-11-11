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
    $due=$_POST['due'];
    $target_dir = "uploads/"; 

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
        require_once('db_function.php');
        $dbda = new DBDA();
        $course=sql_query("select * from course where ID={$ID}");
       // $where=array('ID'=> $count[0]['count(*)'], 'route'=>$dest,'label'=>0);//学生的作业编号为0
        $dbda->query("insert into asstea values({$ID},{$course[0]['week']},'{$due}','{$destFilePath}')",0);
        // Move that file to the destination
        $upload->moveFile($destFilePath);

        ?><script language="JavaScript">;alert("submit successfully!");location.href="assignmentsTea.php?ID=<?php echo $ID ?>&SID=<?php echo $SID ?>";</script>; <?php
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