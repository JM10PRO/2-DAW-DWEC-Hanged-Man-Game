<?php

$username = "root";
$password = "";
$database = "bd_provincias";
$conexion = mysqli_connect("localhost",$username,$password,$database);

$query = mysqli_query($conexion,"SELECT * FROM tbl_provincias");

echo '<select>';
//echo '<tr><th>ID</th><td>provincias</td></tr>';

while($row = mysqli_fetch_assoc($query)){
    echo "<option value=".$row['cod'].">".$row['nombre']."</option>";
}
echo '</select>';