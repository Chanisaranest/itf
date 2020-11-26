<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'lab-itf11.mysql.database.azure.com', 'chanisaranest@lab-itf11', 'Nestnest61', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['Name'];
$comment = $_POST['Comment'];
$link = $_POST['Link'];


$sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
<!-- <!DOCTYPE html>
<html>
        <body>
            <form action ="welcome.php" method="POST">
                Name: <input type="text" name="name" /><br>
                Age: <input type="text" name="age" /> <br>
                <input type="submit" />
            </form>
        </body>
</html> -->
