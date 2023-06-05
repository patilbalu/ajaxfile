<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>disaplayproduct</title>
<style>
    #am{
        margin-top:40px;
    }

</style>
</head>
<body>
    <?php
    include_once("header.php");
?>

    <table class="table table-bordered border-danger " id="am">
        <thead>
            <tr class="table-danger">
                <th>sl.no</th>
                <th>Product name</th>
                <th>Product discription</th>
                <th>Product price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Bag</td>
                <td>it is used to carry books,laptop</td>
                <td>1000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>water bottle</td>
                <td>it is hold the water</td>
                <td>100</td>
            </tr>
            <tr>
                <td>3</td>
                <td>soap</td>
                <td>ti is used to bodywash</td>
                <td>50</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Apple</td>
                <td>apple are high in fiber,vitamin c</td>
                <td>200</td>
            </tr>
        </tbody>
    </table>
    <?php
    include_once("footer.php");
    ?>
</body>
</html>