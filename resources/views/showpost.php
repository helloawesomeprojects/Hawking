<!DOCTYPE HTML>
<!--
	Ethereal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Hawking - Hamma shuyerda</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

						
							

						
					
							<section class="panel">
								<div class="intro color2">
									<h2 class="major">Bizda</h2>
									<p><?php echo $word ?></p>
								</div>
								<div class="gallery">
									<div class="group span-3">
										<a href="<?php  if ($post==NULL) echo "Uzur mening bazam bu frazani qayta ishlash uchun yetarli emas"; else echo $post->pictures;?>" class="image filtered span-4" data-position="bottom"><img src="<?php echo $post->pictures;?>" alt="" /></a>										
									</div>									
								</div>
							</section>

						
					

						<!-- Copyright -->
							<div class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</div>

					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>