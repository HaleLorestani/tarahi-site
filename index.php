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
        	
            <div id="carousel-example-generic" class="carousel slide slider" data-ride="carousel">
                              <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="img/slide1.jpg" alt="picture not found!">
                      <div class="carousel-caption">
                   
                      </div>
                    </div>
                    <div class="item">
                      <img src="img/slide1.jpg" alt="picture not found!">
                      <div class="carousel-caption">
                      
                      </div>
                    </div>
                   
                  </div>
                
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
 			</div>

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
						<b>نام کاربری</b><input class="input form-control" type = "text"><br>
						<b>رمز عبور</b><input class="input form-control" type = "password"><br>
						<input style = "float:right; margin-right:50px; margin-top:26px;" type = "checkbox">
                        <b style="margin-top:22px; margin-right:10px;">مرا به خاطر بسپار</b><br>
						<input type="submit" style="margin-right:20px; margin-top:20px;" class="btn btn-success" value = "ورود به سایت">
					</form>
				
				</div>
			</div>		
		</div>
		 
         
<?php include "parts/footer.php" ?>
<?php include "parts/script.php" ?>
	</body>

</html>