<?php
 $conn = mysqli_connect('localhost', 'root','','contactus');
if(mysqli_connect_error()){
    die('Connection Failed : '.mysqli_connect_error());
}
?>