<html>
<head>
<title>ITF Lab</title>
</head>
<body style="background-color: FFD6DA;">
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lab-itf11.mysql.database.azure.com', 'chanisaranest@lab-itf11', 'Nestnest61', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table style="padding-top: 50px; padding-left: 100px;" width="600" border="1">
  <tr>
    <th width="100" style="color : B6E3E9;"> <div align="center">Name</div></th>
    <th width="350" style="color : C3DDE0;"> <div align="center">Comment </div></th>
    <th width="150" style="color : 7CCED1;"> <div align="center">Link </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td style="color: C4E4F4;"><?php echo $Result['Name'];?></div></td>
    <td style="color: ABBDEE;"><?php echo $Result['Comment'];?></td>
    <td style="color: E7D2EF;"><?php echo $Result['Link'];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
