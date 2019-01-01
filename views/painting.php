<?php

#connect to database

$dbconn = pg_connect("host=localhost dbname=art-website user=art-website password=P@ssw0rd");

if(!$dbconn) 
{
    echo "Error : Unable to open database";
} 
else 
{
    // echo "Opened database successfully";
}


# the query

$paintingName = $_GET['name']; 

$sql =
    "SELECT * 
    FROM paintings
    WHERE name = '$paintingName' ";

$query = pg_query($dbconn, $sql);

if(!$query) 
{
     echo pg_last_error($db);
     exit;
} 

while($row = pg_fetch_row($query)) 
{
    $date = $row[0];
    $price = $row[1];
    $height = $row[2];
    $width = $row[3];
    $description = $row[4];
    $name = $row[5];
    $medium = $row[7];
    $fileName = $row[8];
  }
 
//   echo "Operation done successfully";
  pg_close($dbconn);
?>

<html>
<head>
    <title><?php echo $name; ?></title>
    <head>
	<title>Patti Dyason Art</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="../scripts/style.css">
</head>
<body>

    <section class="navigation">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="../index.html">Patti Dyason Art</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.html">Information</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <section id = "painting">
        <div class = "container">
            <div class = "row">
                <div class = "col-10">
                    <img src="../images/large/<?php echo $fileName?>.jpg" class="img-fluid">
                </div>
                <div class = "col-2">
                    <div class = "painting-details text-center">
                        <p class = "mt-3"><strong><?php echo $name; ?></strong></p>
                        <p><?php echo $medium; ?></p>
                        <p><?php echo $price; ?></p>
                        <p><?php echo $height; ?>  <?php echo $width; ?></p>
                        <p><?php echo $description; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <hr>

    <section class="footer">
        <div class="container">
            <div class="row">
                <p class="copyright text-center w-100">© 2018 Patti Dyason</p>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="../scripts/javascript.js"></script>
</body>
</html>
