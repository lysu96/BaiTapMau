<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Học javascript cơ bản</title>
	<link rel="stylesheet" href="css/css.css">
	<script src="js/js.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	<h1>Ôn tập Javascript cơ bản</h1>
	<h2 id="hd"></h2>
	<h2 id="gh"></h2>
	<button type="button" onclick="thay()">Xem</button>
	<button type="button" id="nhapten" onclick="thongbaont()">Nhập tên</button>
	<script>
	// biến và kiểu dữ liệu
		document.write("<h2>Ôn biến và kiểu dữ liệu</h2>");
/*      3 loại khai báo biến: var, let, const.
      	4 loại kiểu dữ liệu:
     		+ string kiểu chuỗi.
      		+ number kiểu số.
      		+ boolean kiểu đúng hoặc sai.
      		+ object kiểu giá trị vd: var a ={ten: "hoten",tuoi: 18}.
*/      
		var ten = "Sú"; 	// kiểu string
		let age = 23; 		// kiểu number
		let dep = true; 	// kiểu boolean
		const sothich = {ratthich: "Du lịch", thich: "Học code", khongthich: "Ngủ"}; // kiểu object

		document.write("- biến tên kiểu string: "+ten);
		document.write("<br>- biến tuổi kiểu number: "+age);
		document.write("<br>- biến đẹp kiểu boolean: "+dep);
		document.write("<br>- biến sở thích kiểu object rất thích: "+sothich.ratthich); // cách 1
		document.write("<br>- biến sở thích kiểu object thích: "+sothich["thich"]); //cách 2 (có 2 cách lấy dữ liệu)
		document.write("<br>- biến sở thích kiểu object không thích: "+sothich.khongthich);

	// toán tử phổ biến
		document.write("<h2>Ôn toán tử</h2>");
		document.write("- cho biến kiểu number: x = 5, y = 10");
		document.write("<br>- cho biến kiểu string: a = Anh, e = Em");

		let x = 5, y = 10;
		let a = " Anh ", e = " Em ";
		let congs = x+y;
		let trus = x-y;
		let nhans = x*y;
		let chias = x/y;
		let chiasd = x%y;
		let bp =x**y;
		let can = Math.sqrt(x);

		document.writeln("<h3>+ Số với số</h3>");
		document.writeln("-(x + y) = "+congs);
		document.writeln("<br>- (x - y) = "+trus);
		document.writeln("<br>- (x * y) = "+nhans);
		document.writeln("<br>- (x / y) = "+chias);
		document.writeln("<br>- (x % y) = "+chiasd);
		document.writeln("<br>- (x ** y) = "+bp);
		document.writeln("<br>- (căn bậc 2 của x) = "+can);

		y++;
		document.writeln("<br>- y ++ = "+y);
		y--;
		document.writeln("<br>- y -- = "+y);
		++y;
		document.writeln("<br>- ++y = "+y);
		--y;
		document.writeln("<br>- --y = "+y);
		y+=y;
		document.writeln("<br>- y += y = "+y);
		y*=y;
		document.writeln("<br>- y *= y = "+y);
		y/=y;
		document.writeln("<br>- y /= y = "+y);
		y%=y;
		document.writeln("<br>- y %= y = "+y);	
		y-=y;
		document.writeln("<br>- y -= y = "+y);

		document.writeln("<h3>+ gắn Số với chuỗi</h3>");
		let gansc = x+a;
		let gancc = a+e;
		let gancs = e+x;
		document.writeln("-(x + a) = "+gansc);
		document.writeln("<br>- (a + e) = "+gancc);
		document.writeln("<br>- (e + x) = "+gancs);

	// object
		let hs = {
			ten: "Ly A Sú",
			tuoi: 23,
			deptrai: true,
			sing: function() {
				return this.ten +" - "+this.tuoi +" - "+this.deptrai;
			},
		};

		document.getElementById("hd").innerHTML = hs.sing();
		
		function thay() {
			document.getElementById("hd").innerHTML = hs["ten"];
		}

	// mạng
		document.write("<h2>Ôn mạng</h2>");
		document.write("<br>- Mang xe gom: ");
		var xe = ["oto", "xe may", "taxi", "xe dap"];
		document.writeln("[ "+xe+" ]");
		document.writeln("<br>- thich: "+xe[2]);
		document.writeln("<br>- so luong xe: "+xe.length+" xe");
		document.writeln("<br>- taxi co: "+xe[2].length+" ki tu <br>");
		xe[2]="May bay";
		document.writeln("- thay taxi = "+xe[2]+"<br>");
		document.writeln("- bo xe cuoi: "+xe.pop())
		document.write("<br>- mang xe con [ "+xe+" ]");
		xe.push("Tau hoa")
		document.writeln("<br>- them xe: "+xe[3]);
		document.write("<br>- mang xe con [ "+xe+" ]");
		document.writeln("<br>- loai bo: "+xe.splice(1,2));
		document.write("<br>- mang xe con [ "+xe+" ]");
		var xecho = ["xe tai","xe cho hang", "xe khach"];
		document.writeln("<br>- cho mang xe: [ "+xecho+" ]");
		var xetai = xe.concat(xecho);
		document.write("<br>- noi 2 mang voi nhau thanh mang sau: [ "+xetai+" ]");
		document.write("<br>- sap xep mang theo thu tu abc: <strong>[ "+xetai.sort()+" ]</strong>");
	// thời gian
		document.write("<h2>Ôn Thời gian</h2>");
		var day = new Date();
		document.write("<br>- thoi gian hien tai: "+day);
		document.write("<br>- gio hien tai: "+day.getHours(day)+":"+day.getMinutes(day)+":"+day.getSeconds(day));
		document.write("<br>- ngay hien tai: "+day.getDate(day));
		document.write("<br>- thang hien tai: "+day.getMonth(day));
		document.write("<br>- nam hien tai: "+day.getFullYear(day));


	// thông báo
	function thongbaont() {
		var thongbao = prompt("nhập tên");
		alert(thongbao);
	}
	</script>

	<footer>
		
	</footer>
</body>
</html>