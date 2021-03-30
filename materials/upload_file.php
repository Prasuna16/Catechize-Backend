<?php
  
  include './../db_connect.php';

  $encodedPDF = $_POST['PDF'];

  $pdfTitle = $_POST['fileName'];
  $pdfLocation = "documents/$pdfTitle.pdf";
  $another = "C:\\Drive_E\\3-1\\EPICS\\Catechize-master\\Catechize-master\\app\\src\\main\\assets\\$pdfTitle.pdf";

  $sqlQuery = "INSERT INTO `documents`(`title`, `location`) VALUES ('$pdfTitle', '$pdfLocation')";


  if(mysqli_query($conn, $sqlQuery)){
    file_put_contents($pdfLocation, base64_decode($encodedPDF));
    file_put_contents($another, base64_decode($encodedPDF));
    $result["status"] = TRUE;
    $result["remarks"] = "document uploaded successfully";

  }else{

    $result["status"] = FALSE;
    $result["remarks"] = "document uploading Failed";

  }

  mysqli_close($conn);

  print(json_encode($result));

?>