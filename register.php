<?php


$link = mysqli_connect("localhost", "root", "root", "practice");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO register (username, password) VALUES ('shraddha', 'bazzinga')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 


// Close connection
mysqli_close($link);
?>
