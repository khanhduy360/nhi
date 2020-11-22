<!DOCTYPE>
<html>
<head>
	<title>Chi tiết sản phẩm</title>
	 <meta charset="UTF-8">
    <link rel="stylesheet" href="font-awesome\css\font-awesome.min.css">
<style>
.head1{
	width:100%;
	height:5%;
	background-color: #B22830;

	}
	
        .head1 ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
			font-size:15px;
           
			
        }

       .head1 li {
            float: right;
        }

        .head1 li a,
        .dropbtn {
            display: block;
            color: white;
            text-align: center;
            padding: 7.5px 6px;
            text-decoration: none;
        }

       .head1 li a:hover,
        .dropdown:hover .dropbtn {
            background-color: #53382c;
            color: white;
            font-weight: bold;
        }

       .head1 li.dropdown {
            display: inline-block;
        }

      .head1 .dropdown-content {
            display: none;
            position: absolute;
            background-color: #53382c;
            min-width: 91.5px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

       .head1 .dropdown-content a {
            color:white;
            padding: 5px 5px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

       .head1 .dropdown-content a:hover {
            background-color:#53382c;
            color: white;
        }

        .head1 .dropdown:hover .dropdown-content {
            display: block;
        }
		#h2r .search-container {
            float: right;
        }
	    
        .head2 {
            width: 100%;
            overflow: auto;
			
			
        }

        #h2l {
            width: 10%;
            height: 10%;
            float: left;
        }

        #h2l img {
            width: 100%;
            height: 99%;
        }

        #h2r {
            width: 90%;
            height: 10%;
            float: right;

        }

        #h2r ul {
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            background-color: #B22830;
        }

        #h2r li {
            float: left;
        }

        #h2r li a,
        .dropbtn {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 24px 15px;
            text-decoration: none;
        }

        #h2r li a:hover,
        .dropdown:hover .dropbtn {
            background-color: #53382c;
            color: white;
            font-weight: bold;
        }

        #h2r li.dropdown {
            display: inline-block;
        }

        #h2r .dropdown-content {
            display: none;
            position: absolute;
            background-color: #53382c;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        #h2r .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        #h2r .dropdown-content a:hover {
            background-color: #53382c;
            color: white;
        }

        #h2r .dropdown:hover .dropdown-content {
            display: block;
        }
		#h2r .search-container {
            float: right;
        }

       #h2r input[type=text] {
            padding: 9px;
            margin-top: 16px;
            font-size: 15px;
            border: none;
        }

        #h2r .search-container button {
            float: right;
            padding: 10px 15px;
            margin-top: 16px;
            margin-right: 16px;
            background: white;
            font-size: 15px;
            border: none;
            cursor: pointer;
        }

       #h2r .search-container button:hover {
            background: #ccc;


        }

        @media screen and (max-width: 600px) {
            #h2r .search-container {
                float: none;
            }

            #h2r a,
           #h2r input[type=text],
          #h2r .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 20px;
            }

            #h2r input[type=text] {
                border: 2px solid #ccc;
            }
        }
#section-2{
        padding:0.5em;
        display:grid;
        grid-template-columns:0.5fr 0.5fr 0.5fr;
        grid-gap:0.5em;
    }
    .post{
        text-align:center;
        box-shadow:1px 3px 5px rgba(0,0,0,0.24);
        border-radius:8px;
        transition:0.4s;
    }
    .post:hover{
        background:rgb(177, 171, 171);
    }
    .post img{
        border-radius:5px 5px 0 0;
        width:100%;
        height:auto;
    }

img .img{
float:left;
border:1px solid #ccc;
}

p.clear{clear:both;}



</style>

</head>




<body>
<div class="head1">
	<ul>
		<li><a href="#"><i class="fa fa-shopping-cart"></i> <span>Giỏ hàng</span></a>
		<li class="dropdown">
		<a href="#" class="dropbtn"><i class="fa fa-user"></i> <span>Tài khoản</span></a>
			<div class="dropdown-content">
				<a href="#">Đăng ký</a>
				<a href="#">Đăng nhập</a>
		</div>
		</li>
	</ul>
	
</div>

    <div class="head2">

        <div id="h2l"><img src="logo.jpg"></div>

        <div id="h2r">

            <ul>
                <li><a href="#">Trang chủ</a></li>
				<li><a href="#">Giới thiệu</a></li>
				<li><a href="#">Hướng dẫn đặt hàng</a></li>
				<li><a href="#">Tin tức</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Sản phẩm</a>
                    <div class="dropdown-content">
                        <a href="#">TRÀ</a>
                        <a href="#">CÀ PHÊ</a>
                        <a href="#">FREEZE</a>
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
	<h2 style="color:#53382c">TRÀ THẠCH ĐÀO</h2>
	<img class="img" src="TRATHACHDAO.png" width="160px" height="140px">
	<h3>Giá: 39.000 VNĐ</h3>
	<p><input type="button" value="THÊM GIỎ HÀNG"
	
	
	
	
	
	
	
	<h1>TRÀ</h1>
<hr>
<section id="section-2">
<div class="post">
    <img src="TRASENVANG.PNG">
    <div class="post-content">
        <h3>TRÀ SEN VÀNG</h3>
		<h4>Giá: 39.000 VNĐ</h4>
		<a href="san_pham/tra_sen_vang.html"><input type="button" value="THÊM VÀO GIỎ"></a>

    </div>
</div>

<div class="post">
    <img src="TRATHACHDAO.PNG">
    <div class="post-content">
        <h3>TRÀ THẠCH ĐÀO</h3>
		<h4>Giá: 39.000 VNĐ</h4>
		
		<a href="#"><input type="button" value="THÊM VÀO GIỎ"></a>
    </div>
</div>

<div class="post">
    <img src="TRATHACHVAI.PNG">
    <div class="post-content">
        <h3>TRÀ THẠCH VẢI</h3>
		<h4>Giá: 39.000 VNĐ</h4>
		<a href="#"><input type="button" value="THÊM VÀO GIỎ"></a>
    </div>
</div>
</section>

</body>
</html>