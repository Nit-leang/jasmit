<!DOCTYPE>
<html>
<body>
<?php
if((($_FILES["file"]["type"]=="image/gif")||($_FILES["file"]["type"]=="image/jpeg"))&&
($_FILES["file"]["size"] < 20000))
{
    if($_FILES["file"]["error"] > 0)
    {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br/>";
    }
    else
    {
        echo "Update: " . $_FILES["files"]["name"] . "<br />";
        echo "Type: " . $_FILES["files"]["type"] . "<br />";
        echo "Size: " . $_FILES["files"]["size"] . "<br />";
        echo "Temp file: " . $_FILES["files"]["tmp_name"] . "<br />";
        if(file_exists("uplosd/" . $FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file(["file"]["tmp_name"],"upload/".$FILES["file"]["name"]);
            echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
        }
    } 
}
?>
</body>
</html>