<?php
$servername="localhost";
$username="root";
$password="";
$db_name="demoprojects";
$conn=mysqli_connect($servername,$username,$password,$db_name);
if($conn){
    echo("connected");
}
else{
    echo ("not connected");
}
?>