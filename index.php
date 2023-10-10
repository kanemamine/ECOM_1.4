<?php
$serveur = 'localhost';
$username = 'root';
$pwd = '';
$db = 'ecom_1.4';

$conn = mysqli_connect($serveur, $username, $pwd, $db);

if($conn){
    echo "Connected to $db";
}else{
    echo "Error not connected to $db";
}
echo "<br>";
$results = mysqli_query($conn, "SELECT * FROM user");
//var_dump($results);

while($data1 = mysqli_fetch_row($results)){
    echo $data1[0];
    echo $data1[1];
    echo "<br>";
}

while($data2 = mysqli_fetch_assoc($results)){
    echo $data2[0];
    echo $data2[1];
    echo "<br>";
}

?>