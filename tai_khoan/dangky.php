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
.a {
	width: 500px;
	height: 90%;
	padding: 16px;
	margin: 0 auto;
	background-color: #E6E6FA;
}
input[type=text], input[type=password], input[type=tel] {
	width: 100%;
	padding: 5px;
	margin: 5px 0 22px 0;
	border: none;
	background: #DCDCDC;
}
</style>

<body>
<form style="margin-left: 100px;" action="xulidangki.php" method="post" name="frm" onsubmit="return dangky()">
	<div id="dangky">
		<h3 style="text-align:center; margin-bottom: 30px;margin-left: -30px;" >Bạn hãy điền đầy đủ thông tin bên dưới để đăng ký </h3>
		<table>
		<tr>
			<td>Tên đăng nhập  <font color="red">*</font> </td><td class="input"> <input type="text" name="user" size="40"></td>
		</tr>
		<tr>
			<td>Tên người dùng <font color="red">*</font> </td><td class="input"><input type="text" name="HoTenND" size="40"></td>
		</tr>
		<tr>
			<td>Mật khẩu <font color="red">*</font> </td><td class="input"><input type="password" name="pass" size="40" ></td>
		</tr>
		<tr>
			<td>Nhập lại mật khẩu <font color="red">*</font> </td><td class="input"><input type="password" name="pass1" size="40"></td>
		</tr>
		<tr>
			<td>Ngày sinh </td><td class="input"><input type="date" name="ngaysinh"></td>
		</tr>
		<tr>
			<td>Giới tính </td><td class="input">
				<select name="gioitinh">
					<option value="">-Chọn giới tính-</option>
					<option value="nam">Nam</option>
					<option value="nu">Nữ</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Email <font color="red">*</font> </td><td class="input"><input type="text" name="email" size="40"></td>
		</tr>
		<tr>
			<td>Điện thoại <font color="red">*</font> </td><td class="input"><input type="text" name="SoDienThoai" size="40"></td>
		</tr>
		<tr>
			<td>Địa chỉ  </td><td class="input"><textarea name="DiaChi"></textarea></td>
		</tr>
		<tr>
			<td>Mã xác nhận: </td><td></td>
		</tr>
		<tr>
			<td colspan=2 class="btndangky">
				<button type="submit" name="submit">Đăng ký</button>
				<button type="reset">Hủy</button>
			</td>
		</tr>
		</table>
	</div>
</form>

</body>

<script language="javascript">
 	function  dangky()
	{
	    if(frm.HoTenND.value=="")
		{
			alert("Bạn chưa nhập tên. Vui lòng kiểm tra lại");
			frm.HoTenND.focus();
			return false;	
		}
		if(frm.HoTenND.value.length<6)
		{
			alert("Tên quá ngắn. Vui lòng điền đầy đủ tên");
			frm.HoTenND.focus();
			return false;	
		}
		if(frm.user.value=="")
	 	{
			alert("Bạn chưa nhập tên đăng nhập . Vui lòng kiểm tra lại");
			frm.user.focus();
			return false;	
		}
		if(frm.user.value.length<6)
	 	{
			alert("Tên đăng nhập phải lớn hơn 6 ký tự");
			frm.user.focus();
			return false;	
		}
		if(frm.pass.value=="")
		{
			alert("Bạn chưa nhập password");	
			frm.pass.focus();
			return false;
		}
		if(frm.pass.value.length<6)
		{
			alert("Mật khẩu phải lớn hơn 6 ký tự");	
			frm.pass.focus();
			return false;
		}
	   dt=/^[0-9]+$/;
	   dienthoai=frm.dienthoai.value;
	   if(!dt.test(dienthoai))
	   {
		    alert("Bạn chưa nhập số điện thoại. Vui lòng kiểm tra lại.");
		    frm.dienthoai.focus();
		    return false;
	   }
	   	dd=frm.dienthoai.value;
		if(10>dd.length || dd.length>11)
		{
			alert("Số điện thoại không đủ độ dài. Vui lòng nhập lại");
			frm.dienthoai.focus();
			return false;	
		}
		
		
		if(frm.pass1.value=="")
		{
			alert("Bạn chưa nhập lại password");	
			frm.pass1.focus();
			return false;
		}
		mk=frm.pass.value;
		mk1=frm.pass1.value;
		if(pass!=pass1)
		{
			alert("Password chưa đúng");	
			frm.pass1.focus();
			return false;
		}
	}
 </script>

</html>