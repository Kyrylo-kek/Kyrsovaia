<?php include('include/home/header.php'); ?>

    	<section>
		<div class="container">
			<div class="row">
				<?php include('include/home/sidebar.php'); ?>
                <?php $filter = isset($_GET['filter']) ? $_GET['filter'] : '';?>
                    
    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center"> <?php echo $filter;?></h2>
            <br>
	
<!--php starts here-->
<?php
$conn = mysqli_connect('localhost','root','','dbgadget');
					$result = mysqli_query($conn,"SELECT * FROM products where Category like '%$filter%'");
                    //$result = mysqli_query($conn,"SELECT * FROM products where Product like '%$filter%' or Description like '%$filter%' or Category like '%$filter%'");

				if($result){				
				while($row=mysqli_fetch_array($result)){
					
				$prodID = $row["ID"];	
					echo '<ul class="col-sm-4">';
					echo '<div class="product-image-wrapper">
						  <div class="single-products">
						  <div class="productinfo text-center">
					<a href="product-details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'"><img src="reservation/img/products/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="255" height="245" />
                    </a>
					
					<h2><a href="product-details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'">'.$row['Product'].'</a></h2>
					<h2>'.$row['Price'].'₴</h2>
					<p>Категорія: '.$row['Category'].'</p>
					
					<a href="product-details.php?prodid='.$prodID.'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Детальніше про товар</a>
					</div>';		
					echo '</ul>';			
				}
				}
				?>

<!--php ends here-->
		</div>
        </div>
</div>
</div>
</div>
</section>
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
</style>
<?php include('include/home/footer.php'); ?>