<?php include('include/home/header.php'); ?>
	
	<section>
		<div class="container">
			<div class="row">
				<?php include('include/home/sidebar.php'); ?>
				
                
				<div class="col-sm-9 padding-right">
					<div class="alert alert-success">
                        <h3 class="text-center"><i class="fa fa-check-circle fa-lg"></i>
					   	Ваша покупка була успішно оформлена. Дякуємо за вашу покупку!
					   </h3>
                       
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
</style>
	
	