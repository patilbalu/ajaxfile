<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'phpajax';

$conn = new mysqli($host,$username,$password,$database);
if($conn->connect_error){
  die('connection failed'.$conn->connect_error);
}

$name = $_POST['name'];
$desc = $_POST['description'];
$price = $_POST['price'];

$sql = "INSERT INTO products (name,price,description) VALUES ('$name,$price,$desc)";
if($conn->query($sql)===TRUE){
    echo "Product Added successfulley!";
}else{
    echo "error:".$sql."<br/>".$conn->error;
}
$conn->close();
?>