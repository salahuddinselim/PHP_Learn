<?php
print_r($_FILES);
echo "<br>";
if ($_FILES['fileupload']) {
    $path = $_FILES['fileupload']['name'];
    $upload_path = "./uploads/" . $path;
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
