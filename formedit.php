<?php
$id = $_GET['id'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Edit Form</title>
  <style>
    
  </style>
</head>
  <body style="background-color: darksalmon;">
</body>
<form action="saveedit.php"  method = "post" id="EditForm" style="padding-left: 200px;">
    <input type="hidden" name = "id" id="id" value="<?php echo $id;?>">
  <div class="form-group" >
    <label for="Name">Name:</label>
    <font size="7"><input type="text" name="Name" class="form-control" placeholder="Enter Name" id="idName" style="width: 500px;"></font>
  </div>
  <div class="form-group">
    <label for="comment">Comment:</label>
    <textarea class="form-control" rows="5" name="Comment" id="idComment" placeholder="Enter Comment" style="width: 500px;"></textarea>
  </div>
  <div class="form-group" >
    <label for="Name">Link:</label>
    <input type="text" class="form-control" name="Link" placeholder="Enter Link" id="idLink" style="width: 500px;">
  </div>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</body>
</form>
</body>
</html>