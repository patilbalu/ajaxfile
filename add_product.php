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
include_once("includes/header.php");

?>
    <div class="add">
    <form class="container bg-warning" id="addProductForm">
        <div class="form-group">
     <label>Product Name</label>
     <input  type="text" name="name" value="" class="form-control " required><br>
</div>
<div class="form-group">
     <label>Product Discription</label>
     <input type="text" name="description" value="" class="form-control" required><br>
</div>
<div class="form-group">
     <label> Product Price</label>
     <input type="text" name="price" value="" class="form-control" required><br>
</div>
<div class="text-right">
 <!-- <button class="btn-info btn">add</button> -->
 <input type="submit" value="Add Product" class="btn btn-info" />
</div>
    </form>
</div>
<script>
  $(document).ready(function(){
//ajax call for adding a product into product table
$('#addProductForm').submit(function(e){
  e.preventDefault();//prevent form submission
  var formData = $(this).serialize();
  console.log(formData);
  $.ajax({
    type:'POST',
    url:'save-product.php',
    data: formData,
    success: function(response){
      alert(response);
      $('#addProductForm')[0].reset();
    },
    error: function(xhr,status,error){
      console.error(xhr.responseText);
    }
  })
})
  });
  </script>
  
  <?php
include_once("includes/footer.php");
  ?>
</body>
</html>