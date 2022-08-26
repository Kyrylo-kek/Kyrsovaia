<?php
$servername = "localhost";
$database = "dbgadget";
$username = "root";
$password = "";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
	
	$prodID = $_GET['prodid'];

	if(!empty($prodID)){
		$sqlSelectSpecProd = mysqli_query($conn, "SELECT * FROM `products` WHERE id = '$prodID'");
		$getProdInfo = mysqli_fetch_array($sqlSelectSpecProd);
		$prodname= $getProdInfo["Product"];
		$prodcat = $getProdInfo["Category"];
		$prodprice = $getProdInfo["Price"];
		$proddesc = $getProdInfo["Description"];
		$prodimage = $getProdInfo["imgUrl"];
				}
?>
<?php include('include/home/header.php'); ?>

<style>
	.left-sidebar h2, .brands_products h2 {
  color: black;
  font-family: 'Roboto', sans-serif;
  font-size: 18px;
  font-weight: 700;
  margin: 0 auto 30px;
  text-align: center;
  text-transform: uppercase;
  position: relative;
  z-index:3;
}
.left-sidebar h2:after, h2.title:after{
	content: " ";
	position: absolute;
	border: 1px solid #f5f5f5;
	bottom:8px;
	left: 0;
	width: 100%;
	height: 0;
	z-index: -2;
}
.left-sidebar h2:before {
  content: " ";
  position: absolute;
  background: #808180;
  bottom: -6px;
  width: 264px;
  height: 30px;
  z-index: -1;
  left: 50%;
  margin-left: -131px;
  border-radius: 5px;
}
h2.title:before {
    content: " ";
    position: absolute;
    background: #808180;
    bottom: -6px;
    width: 837px;
    height: 30px;
    z-index: -1;
    left: 50%;
    margin-left: -416px;
    /* width: 900px; */
}
.search_box input {
  background: #808180;
  border: medium none;
  color: black;
  font-family: 'Times New Roman';
  font-size: 20px;
  font-weight: 300;
  height: 35px;
  outline: medium none;
  padding-left: 10px;
  width: 155px;
  background-image: url(../images/home/searchicon.png);
  background-repeat: no-repeat;
  background-position: 130px;
}
h2.title {
    color: black;
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    font-weight: 700;
    margin: 0 15px;
    text-transform: uppercase;
    margin-bottom: 30px;
    position: relative;
}
.productinfo p {
    font-family: 'Roboto', sans-serif;
    font-size: 14px;
    font-weight: 400;
    color: #fff;
}
.product-information p {
    color: #fff;
    font-family: 'Roboto', sans-serif;
    margin-bottom: 5px;
}
.product-information h2 {
    color: #fff;
    font-family: 'Roboto', sans-serif;
    font-size: 20px;
    margin-top: 0;
}

</style>


	<section>
		<div class="container">
			<div class="row">
				
				
                
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
                            
						
							<img src="reservation/img/products/<?php echo $prodimage; ?>" />	
                                
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
							<h2 class="product"><?php echo $prodname; ?></h2>
								<p>Категорія: <?php echo $prodcat; ?></p>
				
								<p>Ціна: <span class="price"><?php echo $prodprice; ?>₴</span></p>

                                <br>
                                
                                <a class="btn btn-default add-to-cart" id="add-to-cart"><i class="fa fa-shopping-cart"></i>Додати до кошика</a>
                                <p class="info hidethis" style="color:red;"><strong>Товар додано до кошика!</strong></p>
								<p><b>Опис товару: </b><?php echo $proddesc; ?></p>
								<p><b>Контактна інформація:</b>+38099532432</p>
								<p><b>Email:</b> email@domain.com</p>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
				</div>
			</div>
		</div>
		</div>
	</section id="mar-but">
	
	<?php include('include/home/footer.php'); ?>