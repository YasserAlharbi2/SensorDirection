<?php
$host = "localhost" ;
$username= "id19450421_root" ;
$password= "jT\~#x*7oaSh2=ms" ;
$dbname= "id19450421_robotsensor";

$conn=mysqli_connect($host , $username ,$password,$dbname);
$directionvalue = $_GET['btn'];
if(mysqli_connect_errno())
    echo "connection could not established...".mysqli_connect_error();
else
    echo "successfully connected...";
    
$sql = "Select * from  RobotSensor";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Error in query");
}

while ($row = mysqli_fetch_assoc($result)) {
    echo 'id: ' . $row['id'] . ' RobotDirection:'  .  $row['sensor_direction'] .'<br/>' ;
}