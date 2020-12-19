<?php
$kq = '';
$a = ($_POST['a']);
$b = ($_POST['b']);
$c = ($_POST['c']) ;
$delta = ($b*$b) - (4*$a*$c);

if ($delta < 0) {
		$kq = 'phương trình vô nghiệm..!';
	} else if ($delta == 0) {
		$kq = 'phương trình có 2 nghiệm kép: x1 x2 = '.(-$b/2*$a);
	} else if ($delta > 0) {
		$kq = 'Phương trình có 2 nghiệm phân biệt <br>';
		$kq .= 'x1 = '.((-$b + sqrt($delta))/2*$a).'<br>';
		$kq .= 'x2 = '.((-$b - sqrt($delta))/2*$a);
		}
	echo $kq;
?>