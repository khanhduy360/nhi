<?php
	//tạo kết nối đến cơ sở dữ liệu
	include"dbconnect.php";
	
	if(isset($_POST['btndangky'])){
		//xu ly dang ky
		$tentk=$_POST['tentk'];
		$pass=md5($_POST['pass']);
		$hovaten=$_POST['hovaten'];
		$diachi=$_POST['diachi'];
		$sdt=$_POST['sdt'];
		
		$sql1 ="INSERT INTO khachhang(MSKH,HoTenKH,DiaChi,SoDienThoai) VALUES('$tentk','$hovaten','$diachi','$sdt')";
		$sql2 ="INSERT INTO login(UserNam,Password,Role) VALUES ('$tentk','$pass',0)";

$result1 = mysqli_query($conn,$sql1);
$result2 = mysqli_query($conn,$sql2);


mysqli_close($conn);
//echo'<script>'
//location.href = "dangky.php";
//alert("Bạn đã đăng ký thành công");
//</script>
echo"Đăng ký thành công!";

	}
?>