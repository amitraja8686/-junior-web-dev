<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>uploads file</h2>
    <form  method="post" enctype="multipart/form-date">
        select file:
        <input type="file" name="myfile"><br>
        <input type="submit" value="upload">
    </form>
    <?php
    if|(isset($_post['submit']))
    {
        $filename=$_FILES['myfile']['name'];
        $filemp=$_FILES['myfile']['tmp_name'];
        $filesize=$_FILES['myfile']['size'];
        $fileerror=$_FILES['myfile']['error'];
        //destination folder
        $folder=$filename;
        //check if there is no error
        if($fileeror == 0)
            if(move_uploaded_file($filetmp,$folder))
                {
                    echo |"file uploaded successfully";
                }
                else
                    {
                        echo"failed to upload file";
                    }
                    else
                        {
                            echo "error in file upload";
                        }
    }
    ?>
</body>
</html>