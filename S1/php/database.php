<?php
$db=new mysqli("localhost","root","","briandb");
if($db->connect_error)
{
die("connection failed:".$db->connect_error);
}
$result=$db->query("SELECT * FROM data3");
while($row=$result->fetch_assoc())
{
echo"Name:".$row['name']."<br>";
}
$db->close();
?>
