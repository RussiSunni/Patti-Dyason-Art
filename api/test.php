<?php

$dbconn = pg_connect("host=localhost dbname=art-website user=art-website password=P@ssw0rd");
//connect to a database named "mary" on the host "sheep" with a username and password

echo($dbconn);