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
    <th width="250" style="background-color : B6E3E9;"> <div align="center">Name</div></th>
    <th width="350" style="background-color : C3DDE0;"> <div align="center">Comment </div></th>
    <th width="300" style="background-color : 88DDBB;"> <div align="center">Link </div></th>
    <th width="250" style="background-color : 7CCED1;"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td style="background-color: C4E4F4;"><?php echo $Result['Name'];?></div></td>
    <td style="background-color: ABBDEE;"><?php echo $Result['Comment'];?></td>
    <td style="background-color: B9E3AE;"><?php echo $Result['Link'];?></td>
    <td style="background-color: E7D2EF;"><button type ='submit' style="background-color:FAAE9F;"><a href="delete.php?id=<?=$Result['id'];?>">Detele</a></button></td>
  </tr>
<?php
}
?>
</table>
<input type="button" value="ADD" style="background-color: FAAE9F;margin-left: 300px;" onclick="document.location='form.html'">
<?php
mysqli_close($conn);
?>
</body>
</html>
