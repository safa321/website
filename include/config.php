<?php
//time zone
date_default_timezone_set('Asia/Iraq');
//database connection
$con=mysqli_connect("localhost","root","safa1234","covidtmsdb");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}

?>
