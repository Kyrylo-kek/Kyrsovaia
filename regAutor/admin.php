
<?php include('include/admin/header.php');?>
    <section>
		<div class="container">
			<div class="row">
				<?php include('include/admin/sidebar.php');?>

                    
    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Всі товари</h2>
                        
          
          <label for="filter">Фільтр</label> <input type="text" name="filter" value="" id="filter" />
					<a rel="facebox" href="addproduct.php">Додати товар</a>
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> ID </th>
								<th> Зображення </th>
								<th> Товар </th>
								<th> Опис </th>
								<th> Ціна </th>
								<th> Категорія товару </th>
                                <th> Дії над товаром </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('db.php');
							$conn = mysqli_connect($servername, $username, $password, $database);
							$result = mysqli_query($conn, "SELECT * FROM products");
							while($row = mysqli_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['ID'].'</td>';
									echo '<td><a rel="facebox" href="editproductimage.php?id='.$row['ID'].'"><img src="reservation/img/products/'.$row['imgUrl'].'" width="80" height="50"></a></td>';
									echo '<td><div align="right">'.$row['Product'].'</div></td>';
									echo '<td><div align="right">'.$row['Description'].'</div></td>';
									echo '<td><div align="right">'.$row['Price'].'</div></td>';
									echo '<td><div align="right">'.$row['Category'].'</div></td>';
									echo '<td><div align="center"><a rel="facebox" href="editproductdetails.php?id='.$row['ID'].'"><i class="fa fa-edit fa-lg text-success"></i></a> | <a href="#" id="'.$row['ID'].'" class="delbutton" title="Натисність щоб видалити"><i class="fa fa-times-circle fa-lg text-danger"></i></a></div></td>';
									echo '</tr>';
								}
?> 
						</tbody>
					</table>
					<style>
						body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.428571429;
    color: #FFFFFF;
    background-color: #202124;
}a {
    color: #FFFFFF;
    text-decoration: none;
}
a.list-group-item.active, a.list-group-item.active:hover, a.list-group-item.active:focus {
    z-index: 2;
    color: #000;
    background-color: #808180;
    border-color: #808180;
}
.left-sidebar h2, .brands_products h2 {
    color: #000;
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    font-weight: 700;
    margin: 0 auto 30px;
    text-align: center;
    text-transform: uppercase;
    position: relative;
    z-index: 3;
}
#resultTable {
    background-color: white;
    margin-top: 8px;
    width: 100%;
    color: #000000;
    background-color: #808180;
    font-weight: bold; 

}
h2.title {
    color: #000;
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    font-weight: 700;
    margin: 0 15px;
    text-transform: uppercase;
    margin-bottom: 30px;
    position: relative;
}
					</style>
              </section>
<?php include('include/admin/footer.php'); ?>