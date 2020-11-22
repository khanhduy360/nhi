<?php 
include 'process.php';
if(!isset($_POST['submit'])){
	die ('');
}
	
	$HoTenNDND=$_POST['HoTenND'];
	$user=$_POST['user'];
	$pass=md5($_POST['pass']);
	$email=$_POST['email'];
	$ngaysinh=$_POST['ngaysinh'];
	$gioitinh=$_POST['gioitinh'];
	$SoDienThoai=$_POST['SoDienThoai'];
	$diachi=$_POST['DiaChi'];
	$dmyhis= date("Y").date("m").date("d").date("H").date("i").date("s");
		//Lay ngay cua he thong
	$ngay=date("Y").":".date("m").":".date("d").":".date("H").":".date("i").":".date("s");
	
    if (mysqli_num_rows(mysqli_query($conn, "SELECT username FROM khachhang WHERE username='$user'")) > 0){
        echo " <script language='javascript'>
        			alert('User name đã tồn tại');
        			window.open('index.php?content=dangky','_self', 1)


        	</script>";
    }
     $addmember = mysqli_query($conn, "INSERT INTO khachhang(HoTenND,username,password,ngaysinh,gioitinh,email,SoDienThoai,DiaChi,phanquyen) VALUES ('$HoTenNDND','$user','$pass',
     	'$ngaysinh',
            '$gioitinh',
            '$email',
            '$SoDienThoai',
            '$diachi',
            '1') ");
                          
    //Thông báo quá trình lưu
    if ($addmember)
        echo " <script language='javascript'>
        			alert('Đăng kí thành công');
        			window.open('../index.php','_self', 1 );


        	</script>";
    else
        echo " <script language='javascript'>
        			alert('Đăng kí thất bại');
        			window.open('dangky.phh','_self', 1)



        	</script>";
?>
	
	