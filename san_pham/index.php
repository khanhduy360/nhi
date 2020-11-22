<html>
<head>
<style type="text/css">
.buy-button{
	background:#444;
	padding:5px;
	color:#fff;
}
#pagination{
	text-align:right;
	margin-top:15px;
}
.page-item{
	boder:1px solid #ccc;
	padding:5px 9px;
	color:#000;
}
.current-page{
	background:#000;
	color:#FFF;
}

</style>

</head>

<body>
<?php 
include'./connect_db.php'; 
$products = mysqli_query($conn,"SELECT * FROM 'product'");
var_dump($products);exit;

?>
<div class="container">
<h1>Danh sách sản phẩm</h1>
<div class="product-items">
<?php
while ($row =mysqli_fetch_array($products)){
	?>
<div class="product-item">
		   <div  class="product-img">
		   <img src="TRASENVANG.png" title="Trà sen vàng"/>
		   </div>
		   <strong>TRÀ SEN VÀNG</strong>
		   <label>Giá:</label><span class="product-price">39.000 VND</span></br>
		   <p>hgsvg</p>
		   <div class="buy-button">
		   <a href="add_sanpham.php">Mua sản phẩm</a>
		   </div>
		   </div>
		   <div class="clear-both"></div>
		   </div>
		   </div>
</body>
</html>