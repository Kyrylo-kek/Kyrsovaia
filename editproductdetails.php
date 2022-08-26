<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
form{
  background-color: #808180;
  color: black;
}
-->
</style>
<?php
	include('db.php');
	$conn = mysqli_connect($servername, $username, $password, $database);
	$id=$_GET['id'];
	$result = mysqli_query($conn, "SELECT * FROM products WHERE ID ='$id'");
		while($row = mysqli_fetch_array( $result))
			{
				$pname=$row['Product'];
				$desc=$row['Description'];
				$price=$row['Price'];
				$cat=$row['Category'];
			}
?>
<form action="execeditproduct.php" method="post">
	<input type="hidden" name="prodid" value="<?php echo $id=$_GET['id'] ?>">
	Назва товару:<br><input type="text" name="pname" value="<?php echo $pname ?>" class="ed"><br>
	Опис:<br><input type="text" name="desc" value="<?php echo $desc ?>" class="ed"><br>
	Ціна:<br><input type="text" name="price" value="<?php echo $price ?>" class="ed"><br>
	Категорія:<br>
        <select name="cat" class="ed">
            <?php
                include('db.php');
                $conn = mysqli_connect($servername, $username, $password, $database);
                $r = mysqli_query($conn, "SELECT * from category");
                while($row = mysqli_fetch_array($r)){
                    $selected = ($cat == $row['title']) ? " selected='selected'" : "";
                     echo '<option '.$selected.'>'.$row['title'].'</option>';
                }
            ?>
              </select>
    <br>
	<input type="submit" value="Оновити" id="button1">
</form>