<?php
// connect to the database*
//include '../../../includes/connect.php';
//$conn = mysqli_connect('localhost', 'root', '', 'tmsdup_previous');
$conn = mysqli_connect('localhost', 'root', '', 'file-management');

//$sql = "SELECT * FROM thesis_documents_tbl";
$sql = "SELECT * FROM files";

$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx', 'PNG', 'png','JPG','jpg'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000000000000) { // file size
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            //$sql = "INSERT INTO files (name, size, downloads) VALUES ('$filename', $size, 0)";
            //$sql = "INSERT INTO thesis_documents_tbl (name) VALUES ('$filename')";
            $sql = "INSERT INTO files (name) VALUES ('$filename')";

            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}

// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM thesis_documents_tbl WHERE thesis_document_id = $id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE thesis_documents_tbl SET thesis_document_status=$newCount WHERE thesis_document_id = $id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}