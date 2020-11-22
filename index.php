<?php
if(session_id() ===''){
    session_start();
    include 'process.php';
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Web bán hàng</title>
    <link rel="stylesheet" href="font-awesome\css\font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
	if(isset($_POST['btnthoat'])){
		unset($_SESSION['MSKH']);
		unset($_SESSION['HoTenND']);
		unset($_SESSION['username']);
		unset($_SESSION['phanquyen']);
		unset($_SESSION['cart']);
		echo "
							<script language='javascript'>
								alert('Thoát thành công');
								window.open('index.php','_self', 1);
							</script>
			";

	}
?>
<div class="head1">
					<?php
						if(!isset($_SESSION['HoTenND'])){
							include 'truocdangnhap.php';
						}
						else
							include 'saudangnhap.php';
					?>
					
				</div>
	


    <div class="head2">

        <div id="h2l"><img src="image/logo.jpg"></div>

        <div id="h2r">

            <ul>
                <li><a href="#">TRANG CHỦ</a></li>
				<li><a href="#">GIỚI THIỆU</a></li>
				<li class="dropdown">
                    <a href="#" class="dropbtn">FREEZE</a>
                    <div class="dropdown-content">
                        <a href="#">Chocolate freezea</a>
                        <a href="#">Freeze hạnh nhân</a>
                        <a href="#">Cookies & cream</a>
                    </div>
            
				</li>  				<li class="dropdown">
                    <a href="#" class="dropbtn">CÀ PHÊ</a>
                    <div class="dropdown-content">
                        <a href="#">Cà phê đen</a>
                        <a href="#">Cà phê đá</a>
                        <a href="#">Phin di</a>
                    </div>
            
				</li>                <li class="dropdown">
                    <a href="#" class="dropbtn">TRÀ</a>
                    <div class="dropdown-content">
                        <a href="#">Trà sen vàng</a>
                        <a href="#">Trà thạch vải</a>
                        <a href="#">TRÀ thạch đào</a>
                    </div>
            
				</li>
				<div class="search-container">
            <form>
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
			</ul>
			
			
        </div>
    </div>

<div class="slideshow-container">
<div class="mySlides fade">
  <img src="image/a4.jpg" style="width:100%">  
</div>

<div class="mySlides fade">
  <img src="image/a5.jpg" style="width:100%">
</div>
<div class="mySlides fade">
  <img src="image/a2.jpg" style="width:100%">
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<div class="box">
<h1>Sản phẩm nổi bật</h1>
<section id="section-2">

<?php 
		
		$item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:12;
		$current= !empty($_GET['page'])?$_GET['page']:1;
		$offset= ($current-1) * $item_per_page;
		$sql="SELECT * FROM HangHoa  WHERE loai=1 order by MSHH  asc limit ".$item_per_page." offset ".$offset."";
		$total_product=mysqli_query($conn,"SELECT * FROM HangHoa WHERE loai=1");
		$total_product= $total_product->num_rows;
		$result=mysqli_query($conn, $sql);
		$total_page= ceil($total_product/$item_per_page);
		while($row=mysqli_fetch_assoc($result)){

	?>
    <div class="product">
    <div class="content">
    <img src="image/<?php echo $row['Hinh']?>" >
    <h4 style="color:#795548"><?php echo $row['TenHH']?></h4>
    <h3 style="color:#B71C1C"><strong><?php echo number_format($row['Gia'],0,",",".")?> đ</strong></h3>
    <button class="button"><a href="addcart.php?idcart=<?php echo $row['MSHH'] ?>" style="color:blue">Thêm vào giỏ</a></button>
	<button class="button"><a href="index.php?content=xemchitiet&MSHH=<?php echo $row['MSHH'] ?>" style="color:green">Xem chi tiết</a></button>
    </div>
    
</div><?php } ?>
</section>
</div>
<div class="row">
  <div class="column side">
  <h2>Thông tin liên hệ</h2>
  <ul>
  <li><a href="#">Địa chỉ:</li></a>
   <li><a href="#">Hotline:</li></a>
    <li><a href="#">Email:</li></a>
	 <li><a href="#">Địa chỉ:</li></a>
  </ul>
  </div>
  

  

  <div class="column middle">
  <h2>Chính sách</h2>
  <ul>
  <li><a href="#">Chính sách giao hàng</li></a>
   <li><a href="#">Chính sách thanh toán</li></a>
    <li><a href="#">Chính sách vận chuyển</li></a>
	 <li><a href="#">Khách hàng thân thiết</li></a>
  </ul>
  
  </div>
  
  <div class="column side">
  <h2>Menu</h2>
  <ul>
  <li><a href="#">Cà phê</li></a>
   <li><a href="#">Sinh tố</li></a>
    <li><a href="#">Trà</li></a>
	 
  </ul>
  </div>
  </div>
   

</body>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

</html>