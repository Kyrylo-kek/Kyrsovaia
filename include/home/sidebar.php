<?$conn = mysqli_connect('localhost','root','','dbgadget')?>
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
                <div class="left-sidebar">
						<h2>Категорії товарів</h2>
                        <div class="list-group">
                        <?php                            
                            $q = "SELECT * from category order by title asc";
                            $r = mysqli_query($conn, $q);

                            if($r){
                                while($row = mysqli_fetch_array($r)){
                                    echo '<a href="category.php?filter='.$row['title'].'" class="list-group-item">'.$row['title'].'</a>';
                                }
                            }
                        ?>                    
                        </div> 
                        <!--/category-products-->
                        </div>
                        </div>
                        <style>
     .list-group {
    padding-left: 0;
    margin-bottom: 15px;
    margin-left:-20px;
    position: fixed;
    width: 300px;
    height: 500px;
        }
        .list-group-item {
    position: relative;
    display: block;
    margin-bottom: -1px;
    background-color: #808180;
    padding: 5px 15px;
    border-width: 1px;
    border-style: solid;
    border-color: #fff;
    border-image: initial;
    font-size: 18px;
}
a.list-group-item {
    color: black;
}
                        </style>
                        