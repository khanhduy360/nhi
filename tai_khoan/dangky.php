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
    <div class="a">
        <h1 align="center">Đăng ký tài khoản hệ thống</h1>
        <form name="form_dangky" action="xulydangky.php" method="post" id="form" enctype="multipart/form-data">
            
                    <label>Tên đăng nhập(*)</label>
                    <input type="text" name="tentk" id="tentk">
                
                    <label>Password(*)</label>
                    <input type="password" name="pass" id="pass">
                
                    <label>Nhập lại password(*)</label>
                    <input type="password" name="password-repeat" id="password-repeat">
                
                    <label>Họ và tên:</label>
                    <input type="text" name="hovaten" id="hovaten">
                
                   
            
                    <label>Địa chỉ(*)</label>
                    <input type="text" name="diachi" id="diachi">
                
                    <label>Số điện thoại(*)</label>
                    <input type="tel" name="sdt" id="sdt">
                
                    <button type="submit" value="submit" name="btndangky">Đăng ký</button>
        </form>
    </div>
</body>

<!--<script type="text/javascript">
    const form = document.getElementById("form");
    form.addEventListener('submit', validateForm);
    function validateForm(event) {
        event.preventDefault();
        let username = document.getElementById('tentk').value;
        let usernameTest = /^[a-zA-Z][a-zA-Z0-9]{5,14}$/;
        if (username == "") {
            alert("Vui lòng nhập tên đăng nhập!");
            return false;
        }
        if (!usernameTest.test(username)) {
            alert("Tên đăng nhập bắt đầu phải là chữ cái và không chứa khoảng trống, tên đăng nhập chứa 5 đến 14 ký tự");
            return false;
        }
       
        let password = document.getElementById('pass').value;
        let passwordTest = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/;
        if (password == "") {
            alert("Vui lòng nhập mật khẩu!");
            return false;
        }
        if (!passwordTest.test(password)) {
            alert("Mật khẩu phải chứa ký tự, 1 ký tự số, 1 ký tự đặc biệt, có 1 ký tự chữ hoa và thường và không chứa tên người dùng");
            return false;
        }
        
        
        let repassword = document.getElementById('password-repeat').value;
        let repasswordTest = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,16}$/;
        if (repassword == "") {
            alert("Vui lòng nhập lại mật khẩu!");
            return false;
        }
        if (!repasswordTest.test(repassword)) {
            alert("Mật khẩu không khớp");
            return false;
        }

      
        let f_name = document.getElementById('first_name').value;
        if (f_name == "") {
            alert("Vui lòng nhập họ!");
            return false;
        }

      
        let l_name = document.getElementById('last_name').value;
        if (l_name == "") {
            alert("Vui lòng nhập tên!");
            return false;
        }

        
        let email = document.getElementById('mail').value;
        let aCong = email.indexOf("@");
        let dauCham = email.lastIndexOf(".");
        if (email == "") {
            alert("Vui lòng nhập Email");
            return false;
        } else if ((aCong < 1) || (dauCham < aCong + 2) || (dauCham + 2 > email.length)) {
            alert("Email phải có dạng user@gmail.com");
            return false;
        }

       
        let phone = document.getElementById('sdt').value;
        let phoneTest = /([0-9]{12}\b)/g;;
        if (phone == "") {
            alert("Vui lòng nhập số điện thoại!");
            return false;
        }
        if (!phoneTest.test(phone)) {
            alert("Số điện thoại phải bao gồm 12 ký số Vd: 84342929839");
            return false;
        }

        form.submit();
        alert("Đăng ký thành công");
    }
</script>-->

</html>