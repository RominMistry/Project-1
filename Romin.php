<?php
if(isset($_POST['ROMIN']))
{
    $server="localhost";
    $username="root";
    $password="";
    $database="web";
    $connection= mysqli_connect($server,$username,$password,$database);
    if(!$connection)
    {
        die(mysqli_connect_error());
    }
    echo "connected";

    $name=$_POST['ROMIN'];
    $surname=$_POST['Mistry'];
    $mobile=$_POST['mobile'];

    echo $sql="INSERT INTO web (name,surname,number) VALUES('$name','$surname','$mobile')";
    $query=mysqli_query($connection,$sql);
    if($query)
    {
        echo "Data inserted";
    }

    $name=$_POST['ROMIN'];
    $sql = "SELECT * from web WHERE Name='$name'";
    $query =mysqli_query($connection,$sql);
    if($query)
    {
        $row=mysqli_fetch_array($query);
        if($row>0)
        echo "<table>";
        echo "<tr>";
        echo "<th>";
        echo "Name";
        echo "/th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo "$row['Name']";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        echo ("hi");
    }
}
?>