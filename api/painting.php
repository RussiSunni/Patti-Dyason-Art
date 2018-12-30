<?php

#connect to database

$dbconn = pg_connect("host=localhost dbname=art-website user=art-website password=P@ssw0rd");

if(!$dbconn) 
{
    echo "Error : Unable to open database";
} 
else 
{
    echo "Opened database successfully";
}

# the query

$sql =<<<EOF
SELECT * from paintings
WHERE id = 1;
EOF;

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
    $id = $row[6];
  }

//   echo "Operation done successfully";
  pg_close($dbconn);

