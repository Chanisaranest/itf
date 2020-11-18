<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'lab-itf11.mysql.database.azure.com', 'chanisaranest@lab-itf11', 'Nestnest61', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$id = $_GET['id'];


$sql = "DELETE FROM guestbook WHERE id = $id";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>