<?php
//include_once("indox.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>add_product</title>
<style>
    label{
        color:red;
    }
    .add{
     margin-top:40px;
    }

    
</style>
</head>
<body>
<?php
include_once("header.php");

?>
    <div class="add">
    <form class="container bg-warning">
        <div class="form-group">
     <label>Product Name</label>
     <input  type="text" name="product name" value="" class="form-control "><br>
</div>
<div class="form-group">
     <label>Product Discription</label>
     <input type="text" name="product discription" value="" class="form-control"><br>
</div>
<div class="form-group">
     <label> Product Price</label>
     <input type="text" name="product price" value="" class="form-control"><br>
</div>
<div class="text-right">
<button class="btn-info btn">add</button>
</div>
    </form>
</div>
  
  
  <?php
include_once("footer.php");
  ?>
</body>
</html>