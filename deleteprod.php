<?php

include('db.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "DELETE * from products where id='$id'";
 mysqli_query($conn, $sql);
}

?>