$con =new mysqli("localhost","root","test");
if($con->connect_error){
    die("Failed to connect :".$con->connect_error);
}