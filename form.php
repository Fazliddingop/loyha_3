<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </head>
  <body>
<div class="container">

<?php include('add.php')?>
<form action="form.php" method='POST'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Frist</label>
    <input type="text" class="form-control" id="exampleInputEmail1"name="Frist"
     placeholder="Frist">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last</label>
    <input type="text" class="form-control" id="exampleInputEmail1"name="Last" 
     placeholder="Last">
    <br>
    <button type="submit"class="btn btn-primary mb-3">
     submit
  </button>
</div>
 
</form>


</table>
  </div>
  </body>
</html>