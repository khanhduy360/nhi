<?php
if(session_id() ===''){
	session_start();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản hệ thống</title>
</head>
<style>
body {
	font-family: Times new roman, sans-serif;
}
.dangnhap {
	width: 500px;
	height: 90%;
	padding: 16px;
	margin: 0 auto;
	background-color: #E6E6FA;
}
input[type=text], input[type=password]{
	width: 100%;
	padding: 5px;
	margin: 5px 0 22px 0;
	border: none;
	background: #DCDCDC;
}
</style>

<body>
    <div class="dangnhap">
        <h1 align="center">Đăng nhập tài khoản hệ thống</h1>
        <form name="form_dangnhap"  method="post" id="form" enctype="multipart/form-data">
            
                    <label>Tên đăng nhập(*)</label>
                    <input type="text" name="tentk" id="tentk">
                
                    <label>Password(*)</label>
                    <input type="password" name="pass" id="pass">
                    <button type="submit" value="submit" name="btndangnhap">Đăng nhập</button>
        </form>
		<?php
	
	include 'process.php';


?>
<?php
	//Kiểm tra Login nè
	if(isset($_POST["btndangnhap"])){
		$username=$_POST['tentk'];
		$password=md5($_POST['pass']);
		//$password=md5($password);
		$sql =" SELECT * FROM khachhang 
				WHERE username= '$username'
				AND password ='$password'	";
		$user = mysqli_query($conn, $sql);
		if(mysqli_num_rows($user)==1){//nếu số hàng tìm dc trong sql = 1
			//đăng nhập đúng
			$row  = mysqli_fetch_array($user);
			$_SESSION['MSKH']= $row['MaND'];
			$_SESSION['HoTenND']= $row['HoTenND'];
			$_SESSION['username']= $row['username'];
			$_SESSION['phanquyen']= $row['phanquyen'];//lưu các  giá trị trong sql lại bằng biến SESSION
			 if($_SESSION['phanquyen'] ==0)
					{
						
						echo "
							<script language='javascript'>
								alert('Chào admin đã đăng nhập vào hệ thống');
								window.open('../admin/admin.php','_self', 1);
							</script>
						";
					}
                else
                {
                   
                   echo "
							<script language='javascript'>
								alert('Đăng nhập thành công');
								window.open('../index.php','_self', 1);
							</script>
						";
                }

		}else{
			echo "
							<script language='javascript'>
								alert('Tài khoản không tồn tại');
								history.go(-1);
							</script>
						";
		}	


	}

?>

	

	</div>
	
	
</body>
