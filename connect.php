<?php

$conn = mysqli_connect('localhost','root','','crud');
 
// checking the connection 
if(!$conn){
    die ("sorry failed the connection".mysqli_connect_error($conn));
} 

?>