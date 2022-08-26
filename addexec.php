<?php
	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "Це не є зображенням";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"reservation/img/products/" . $_FILES["image"]["name"]);
			
			$location=$_FILES["image"]["name"];
			$pname=$_POST['pname'];
			$desc=$_POST['desc'];
			$price=$_POST['price'];
			$cat=$_POST['cat'];
			
include('db.php');
			$conn = mysqli_connect($servername, $username, $password, $database);
$update=mysqli_query($conn, "INSERT INTO `products` (`ID`, `imgUrl`, `Product`, `Description`, `Price`, `Category`)VALUES(NULL,'$location','$pname','$desc','$price','$cat')");
header("location: admin.php");
var_dump($update);
			exit();
		
			}
	}


?>
