<?php
//check the attributes of files
print_r($_FILES);

echo "<br>";



if ($_FILES['fileupload']) {
    //check the file name, as $_FILES is a 2D array so needs to values, fileupload from the name of form and name is the given default which we can check in the 1st line
    $path = $_FILES['fileupload']['name'];

    //creating uploading path by using different folder and the path name of the file
    $upload_path = "./uploads/" . $path;

    //move uploaded file do take 2 inputs the temporary address which changes every time and the upload path where the file will store. 
    if (move_uploaded_file($_FILES['fileupload']['tmp_name'], $upload_path)) {
        echo "file uploaded successfully";
    } else {
        die("File does not uploaded");
    }
    echo "<br>";
    echo "<br>";
    echo $_FILES['fileupload']['type'];
    $type = $_FILES['fileupload']['type'];
    echo "<br>";
    echo "<br>";
    if ($type == 'image/png' || $type == 'image/jpeg') {
        echo "<img src='$upload_path' alt='Added new image' width = 200px height = 300>";
    } else {
        echo "<a href='$upload_path'>Download</a>";
    }
}
