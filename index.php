<!DOCTYPE html>
<html>
	<head>
		<title>site </title>
		<?php include "parts/head.php" ?>
	</head>

	<body>
	
		<div class = "banner">
			<img src="img/banner.jpg"/>
		</div>
		
		<?php include "parts/menu.php" ?>
		<div class = "slider">
			<img src="img/slide.jpg"/>
		</div>
		<div class = "content">
		
			<div class = "news">
				<h2 class = "heading">آخرین اخبار</h2>
				
				<div class = "item">
					<img src="img/icon.png">
					<p>تیتر اولین خبر</p>
					<p> بخشی از متن نمایشی به کاربر</p>
				</div>
				<div class = "item">
					<img src="img/icon.png">
					<p>تیتر اولین خبر</p>
					<p> بخشی از متن نمایشی به کاربر</p>
				</div>
				<div class = "item">
					<img src="img/icon.png">
					<p>تیتر اولین خبر</p>
					<p> بخشی از متن نمایشی به کاربر</p>
				</div>
<div class = "item">
					<img src="img/icon.png">
					<p>تیتر اولین خبر</p>
					<p> بخشی از متن نمایشی به کاربر</p>
				</div>
				
			</div>
			
			<div class = "gallery">
				<h2 class = "heading">گالری تصاویر</h2>
				<div class = "item2">
					<img src ="img/img1.jpg">
					<img src ="img/img2.jpg">
					<img src ="img/img3.jpg">
					<img src ="img/img4.jpg">
				</div>
				
			</div>		
			<div class = "form">
				<h2 class = "heading">فرم ورود</h2><br>
				
				<div class = "item3">
					<form>
						<b>نام کاربری</b><input class = "input" type = "text"><br>
						<b>رمز عبور</b><input class = "input" type = "password"><br>
						<input style = "float:right; margin-right:50px;" type = "checkbox"><b>مرا به خاطر بسپار</b><br>
						<input type = "submit" value = "ورود به سایت">
					</form>
				
				</div>
			</div>		
		</div>
		 
	</body>

	<?php include "parts/footer.php" ?>

</html>