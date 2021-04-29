<?php
// connect to the database
// Downloads files
//$conn = mysqli_connect('localhost', 'root', '', 'tmsdup_previous');
$conn = mysqli_connect('localhost', 'root', '', 'tmsdup');

//$sql = "SELECT * FROM thesis_documents_tbl";
$sql = "SELECT * FROM thesis_documents_tbl";

$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);


// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM thesis_documents_tbl WHERE thesis_document_id = '$id' ";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    //$filepath = '../../../fileStorage/uploads/' . $file['name'];
    $filepath = 'uploads/' . $file['name'];


    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        //header('Content-Length: ' . filesize('../../../fileStorage/uploads/' . $file['name']));
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        //readfile('../../../fileStorage/uploads/' . $file['name']);
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE thesis_documents_tbl SET thesis_document_status=$newCount WHERE thesis_document_id = '$id' ";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}