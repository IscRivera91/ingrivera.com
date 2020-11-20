<?php require_once ('config.php') ?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<title>DevResume - Bootstrap 4 Resume/CV Template For Software Developers</title>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
	<link rel="shortcut icon" href="favicon.ico"> 
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	
	<!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
	
	<!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/devresume.css">

</head> 

<body>
	<div class="main-wrapper">
		<div class="container px-3 px-lg-5">
			<article class="resume-wrapper mx-auto theme-bg-light p-5 mb-5 my-5 shadow-lg">
				
				<?php require_once 'components/header.php' ?>
				<hr>
				<?php require_once 'components/intro.php' ?>
				<hr>
				<?php require_once 'components/body/main.php' ?>
						
			</article>
					
		</div><!--//container-->
				
		<footer class="footer text-center py-4">
			<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			<small class="copyright text-muted">Designed with <i class="fas fa-heart"></i> by <a class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		</footer>
				
	</div><!--//main-wrapper-->
			
</body>
</html> 

