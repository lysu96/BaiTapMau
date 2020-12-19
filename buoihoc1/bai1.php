<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>bai hoc 1</title>
	<link rel="stylesheet" href="bai1.css">
</head>
<body>
	<h3>BÀI HỌC SỐ 1</h3><br>
	<?php
	echo 'xin chào'.'<br>';
	$number = 18;
	for ($i = 1; $i < $number; $i++){
		if ($number % $i == 0) {
			echo $i.' la uoc so cua '.$number.'<br>';
		}
	}
?>

<br>

<label>Tỷ lệ lãi suất</label><br>
<select name="rate" multiple>
	<?php
		for ($v = 5; $v <=12 ; $v++):
	?>
	<option value="<?php echo $v; ?>">
		<?php
		echo $v;
		?>
	</option>
	<?php endfor; ?>
</select>
<br>
<br>
<?php 
$rolls = 1;
do{
	$rolls ++;
}while (mt_rand(1,6)!=6);
echo 'số lần tung được mặt 6 là : '.$rolls;
?>
<br>
<br>
<h3>ví dụ font</h3>
<div class="font">
	<form action="" method="post" accept-charset="utf-8">
		<label>Username: </label>
		<input type="text" name="username" placeholder="Tên đăng nhập"><br>
		<label>Password: </label>
		<input type="password" name="password" placeholder="Mật khẩu"><br>
		<input type="submit" name="" value="Đăng nhập" id="dn">
		<input type="reset" name="" value="Hủy" id="huy">

		<?php 
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($username == 'username' && $password == 123) {
			echo 'Đăng nhập thành công..!';
		}

		?>
	</form>
</div>
</body>
</html>