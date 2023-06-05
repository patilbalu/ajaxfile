<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>indox</title>
    <style>
        #we{
            margin-top:40px;
        
        }
        .im{
            height:200px;
            width:500px;
        }
        .pp{
            height:200px;
            width:500px;
        }
        h3{
          color:red;
        }
    </style>
      
  </head>
  <body>
    <?php
    include_once("header.php");
?>
    <div  class="row" id="we">
       <div class="col-4"> 
         <img src="OIP.jpg" alt="php" class="im" />
        </div>
              <div class="col-4">
                <h3>what is PHP?</h3>
              <ul>
                <li>PHP:Hypertext Preprocessor</li>
                <li>PHP is a widely-used open source scripting longvage</li>
                <li> PHP scripts are executed on the server</li>
                <li> PHP is free to download and use</li>
              </ul>
              </div>
                    <div class="col-4">
                    <h3>what can PHP do?</h3>
                    <ul>
                     <li>php can generate dynamic page content</li>
                     <li>phpcan create,open,read,delete and close files on the server</li>
                     <li>php can collect form data  </li>
                     <li>php can be used to control user-access</li>
                    </ul>
                    </div>
    </div>
    <div class="row"  id="we"> 
        <div class="col-4">
            <img src="ppp.jpg" alt="pp"  class="pp" />
        </div>
        <div class="col-4">
            <ul>
                <h3>what is mysql?</h3>
                <li>mysql is a relational database mangement system</li>
                <li>mysql is open-source</li>
                <li> mysql iis very fast, reliable,scalable, and easy to use</li>
                <li> mqsql is free to use</li>
            </ul>
        </div>
      </div> 
      <?php
      include_once("footer.php");
      ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </body>
</html>