
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
    
$query = "INSERT INTO RobotSensor (id, sensor_direction) VALUES (NULL, $directionvalue)";
$result = $conn->query($query);
    if ($result === FALSE) {
        
    print("Error");
    
    }else{
        print("The value has been added successfully"); 

}

// $conn = mysqli_connect('localhost','id19450421_root','jT\~#x*7oaSh2=ms','id19450421_robotsensor') or die("Connection failed");
// $directionvalue = $_GET['btn'];
// $query = "INSERT INTO RobotSensor (id,sensor_direction) VALUES (null,$directionvalue)";

// $result = $conn->query($query);
//     if ($result === FALSE) {
        
//     print("Error");
    
//     }else{
//         print("The value has been added successfully"); 

// }
?>