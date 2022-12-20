<?php
if(isset($_POST['ROMIN']))
{
    $server="localhost";
    $username="root";
    $password="";
    $database="student";
    $connection=mysqli_connect($server,$username,$password,$database);
    if(!$connection)
    {
        die(mysqli_connect_error());
    }
    echo "connected";

    $name = $_POST['ROMIN'];
    echo $sql="INSERT INTO register(Name) VALUES($name)";
    $query=mysqli_query($connect,$sql);
    if($query)
    {
        echo "data inserted"
    }
}
?>