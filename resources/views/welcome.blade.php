<!DOCTYPE HTML>

	<head>
		<title>Hawking - Hamma shuyerda</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Page Wrapper hehe -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Panel (Banner) -->
							<section class="panel banner right">
								<div class="content color0 span-3-75">
									<h1 class="major"><!--[-->Salom, mening ismim<!--]--><br />
									<!--[-->Howking<!--]--></h1>
									<p><!--[--><strong>Howking</strong> bu, Uzbek va boshqa tillardan ingiliz tilidagi neron tarmoqlari uchun promt(Ilova)larni moslashtirishga mo'njallangan platformadir<!--]--></p>
									<ul class="actions">
										<li><a href="#first" class="button special color1 circle icon fa-angle-right">Next</a></li>
									</ul>
								</div>
								<div class="image filtered span-1-75" data-position="25% 25%">
									<img src="images/pic01.jpg" alt="" />
								</div>
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight medium right" id="first">
								<div class="content span-7">
									<h2 class="major">Bu yerda</h2>
									<p></p>
								</div>
								<div class="image filtered tinted" data-position="top left">
									<img src="images/pic02.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color1">
								<div class="intro joined">
									<h2 class="major">Amet lorem</h2>
									<p>Sed vel nibh libero. Mauris et lorem pharetra massa lorem turpis congue pulvinar. Vivamus sed feugiat finibus. Duis amet bibendum amet sed. Duis mauris ex, dapibus sed ligula tempus volutpat magna etiam.</p>
								</div>
								<div class="inner">
									<ul class="grid-icons three connected">
										<li><span class="icon fa-diamond"><span class="label">Lorem</span></span></li>
										<li><span class="icon fa-camera-retro"><span class="label">Ipsum</span></span></li>
										<li><span class="icon fa-cog"><span class="label">Dolor</span></span></li>
										<li><span class="icon fa-paper-plane"><span class="label">Sit</span></span></li>
										<li><span class="icon fa-bar-chart"><span class="label">Amet</span></span></li>
										<li><span class="icon fa-code"><span class="label">Nullam</span></span></li>
									</ul>
								</div>
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight large left">
								<div class="content span-5">
									<h2 class="major">Magna amet tempus</h2>
									<p>Mauris a cursus velit. Nunc lacinia sollicitudin egestas bibendum, magna dui bibendum ex, sagittis commodo enim risus sed magna nulla. Vestibulum ut consequat velit. Curabitur vitae libero lorem. Quisque iaculis porttitor blandit. Nullam quis sagittis maximus. Sed vel nibh libero. Mauris et lorem pharetra massa lorem turpis congue pulvinar.</p>
								</div>
								<div class="image filtered tinted" data-position="top right">
									<img src="images/pic03.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel">
								<div class="intro color2">
									<h2 class="major">Bizda</h2>
									<p>O'zbek tilida yozilgan talablarga binoan, Yangi binolar loihalari, Saytlar San'at darajasidagi ilyustratsiyalar va hattoki kasalliklarga tashhis hamda davolash boicha tavsiyalarni olishingiz mumkin</p>
								</div>
								<div class="gallery">
									<div class="group span-3">
										<a href="images/gallery/fulls/01.jpg" class="image filtered span-3" data-position="bottom"><img src="images/gallery/fulls/01.jpg" alt="" /></a>
										<a href="images/gallery/fulls/02.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/fulls/02.jpg" alt="" /></a>
										<a href="images/gallery/fulls/03.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/fulls/03.jpg" alt="" /></a>
									</div>
									<a href="images/gallery/fulls/04.jpg" class="image filtered span-2-5" data-position="top"><img src="images/gallery/fulls/04.jpg" alt="" /></a>
									<div class="group span-4-5">
										<a href="images/gallery/fulls/05.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/fulls/05.jpg" alt="" /></a>
										<a href="images/gallery/fulls/06.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/fulls/06.jpg" alt="" /></a>
										<a href="images/gallery/fulls/07.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/fulls/07.jpg" alt="" /></a>
										<a href="images/gallery/fulls/08.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/fulls/08.jpg" alt="" /></a>
									</div>
									<a href="images/gallery/fulls/09.jpg" class="image filtered span-2-5" data-position="right"><img src="images/gallery/fulls/09.jpg" alt="" /></a>
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color4-alt">
								<div class="intro color4">
									<h2 class="major">Foydalanish</h2>
									<p>Nima kerakligini tanlang va talabingizni keltirilgan oynaga yozing. Tez orada dunyoning eng zo'r neyron tarmoqlari tomondan tayyorlangan natija sizniki boladi. Foydalaning!</p>
								</div>
								<div class="inner columns divided">
									<div class="span-3-25">
										<form method="post" action="{{url('showcase')}}">
                                        @csrf
											<div class="field half">
                                             
											<label for="demo-category">Nima kerakligini tanlang</label>
												<div class="select-wrapper">
													<select name="demo-category" id="demo-category">
														<option value="">-</option>
														<option value="1">Bino</option>
														<option value="1">Sayt</option>
														<option value="1">Iluystratsiya</option>
														<option value="1">Tashxis</option>
													</select>
												</div>
											 </div>											
											
											<div class="field">
												<label for="message">Talablar</label>
												<textarea name="message" id="message" rows="4"></textarea>
											</div>
											<ul class="actions">
												<li><input type="submit" value="Jo'natish" class="button special" /></li>
											</ul>
										</form>
									</div>
									<div class="span-1-5">
										<ul class="contact-icons color1">
											<li class="icon fa-twitter"><a href="#">@untitled-tld</a></li>
											<li class="icon fa-facebook"><a href="#">facebook.com/untitled</a></li>
											<li class="icon fa-snapchat-ghost"><a href="#">@untitled-tld</a></li>
											<li class="icon fa-instagram"><a href="#">@untitled-tld</a></li>
											<li class="icon fa-medium"><a href="#">medium.com/untitled</a></li>
										</ul>
									</div>
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color2-alt">
								<div class="intro color2">
									<h2 class="major">Elements</h2>
									<p>Sed vel nibh libero. Mauris et lorem pharetra massa lorem turpis congue pulvinar. Vivamus sed feugiat finibus. Duis amet bibendum amet sed. Duis mauris ex, dapibus sed ligula tempus volutpat magna etiam. </p>
								</div>
								<div class="inner columns aligned">
									<div class="span-2-75">

										<h3 class="major">Text</h3>
										<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
										This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
										This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>

										<h1>Heading Level 1</h1>
										<h2>Heading Level 2</h2>
										<h3>Heading Level 3</h3>
										<h4>Heading Level 4</h4>
										<h5>Heading Level 5</h5>
										<h6>Heading Level 6</h6>

									</div>
									<div class="span-3">

										<h4>Blockquote</h4>
										<blockquote>Lorem ipsum dolor sit amet. Felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in vestibulum. Blandit adipiscing eu iaculis volutpat ac adipiscing volutpat ac adipiscing faucibus.</blockquote>

										<h4>Preformatted</h4>
										<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + (i++);
    deck.shuffle();
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>

									</div>
									<div class="span-1-25">

										<h3 class="major">Lists</h3>

										<h4>Unordered</h4>
										<ul>
											<li>Lorem ipsum dolor sit.</li>
											<li>Dolor pulvinar etiam.</li>
											<li>Etiam vel felis viverra.</li>
										</ul>

										<h4>Alternate</h4>
										<ul class="alt">
											<li>Lorem ipsum dolor sit.</li>
											<li>Dolor pulvinar etiam.</li>
											<li>Etiam vel felis viverra.</li>
											<li>Felis enim feugiat.</li>
										</ul>

									</div>
									<div class="span-1-5">

										<h4>Ordered</h4>
										<ol>
											<li>Lorem ipsum dolor sit.</li>
											<li>Dolor pulvinar etiam.</li>
											<li>Etiam vel felis viverra.</li>
											<li>Felis enim feugiat.</li>
											<li>Etiam vel felis lorem.</li>
										</ol>

										<h4>Actions</h4>
										<ul class="actions">
											<li><a href="#" class="button special color2">Default</a></li>
											<li><a href="#" class="button">Default</a></li>
										</ul>
										<ul class="actions vertical">
											<li><a href="#" class="button special color2">Default</a></li>
											<li><a href="#" class="button">Default</a></li>
										</ul>

									</div>
									<div class="span-1-25">

										<h4>Icons</h4>
										<ul class="icons">
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
											<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
										</ul>

										<h4>Contact Icons</h4>
										<ul class="contact-icons color2">
											<li class="icon fa-twitter"><a href="#">Twitter</a></li>
											<li class="icon fa-facebook"><a href="#">Facebook</a></li>
											<li class="icon fa-instagram"><a href="#">Instagram</a></li>
											<li class="icon fa-github"><a href="#">GitHub</a></li>
											<li class="icon fa-medium"><a href="#">Medium</a></li>
										</ul>

									</div>
									<div class="span-3">
										<h3 class="major">Table</h3>
										<h4>Default</h4>
										<div class="table-wrapper">
											<table>
												<thead>
													<tr>
														<th>Name</th>
														<th>Description</th>
														<th>Price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Item One</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Two</td>
														<td>Vis ac commodo adipiscing arcu aliquet.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Three</td>
														<td> Morbi faucibus arcu accumsan lorem.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Four</td>
														<td>Vitae integer tempus condimentum.</td>
														<td>19.99</td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="2"></td>
														<td>100.00</td>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
									<div class="span-3">
										<h4>Alternate</h4>
										<div class="table-wrapper">
											<table class="alt">
												<thead>
													<tr>
														<th>Name</th>
														<th>Description</th>
														<th>Price</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Item One</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Two</td>
														<td>Vis ac commodo adipiscing arcu aliquet.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Three</td>
														<td> Morbi faucibus arcu accumsan lorem.</td>
														<td>29.99</td>
													</tr>
													<tr>
														<td>Item Four</td>
														<td>Vitae integer tempus condimentum.</td>
														<td>19.99</td>
													</tr>
													<tr>
														<td>Item Five</td>
														<td>Ante turpis integer aliquet porttitor.</td>
														<td>29.99</td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<td colspan="2"></td>
														<td>100.00</td>
													</tr>
												</tfoot>
											</table>
										</div>
									</div>
									<div class="span-2-25">
										<h3 class="major">Buttons</h3>
										<ul class="actions">
											<li><a href="#" class="button special color2">Special</a></li>
											<li><a href="#" class="button">Default</a></li>
										</ul>
										<ul class="actions">
											<li><a href="#" class="button">Default</a></li>
											<li><a href="#" class="button large">Large</a></li>
											<li><a href="#" class="button small">Small</a></li>
										</ul>
										<ul class="actions">
											<li><a href="#" class="button special color2 icon fa-cog">Icon</a></li>
											<li><a href="#" class="button icon fa-diamond">Icon</a></li>
										</ul>
										<ul class="actions">
											<li><span class="button special color2 disabled">Disabled</span></li>
											<li><span class="button disabled">Disabled</span></li>
										</ul>
										<ul class="actions">
											<li><a href="#" class="button special color2 circle icon fa-cog">Icon</a></li>
											<li><a href="#" class="button circle icon fa-diamond">Icon</a></li>
										</ul>
									</div>
									<div class="span-4-5">
										<h3 class="major">Form</h3>
										<form method="post" action="#">
											<div class="field third">
												<label for="demo-name">Name</label>
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Jane Doe" />
											</div>
											<div class="field third">
												<label for="demo-email">Email</label>
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="jane@untitled.tld" />
											</div>
											<div class="field third">
												<label for="demo-category">Category</label>
												<div class="select-wrapper">
													<select name="demo-category" id="demo-category">
														<option value="">-</option>
														<option value="1">Manufacturing</option>
														<option value="1">Shipping</option>
														<option value="1">Administration</option>
														<option value="1">Human Resources</option>
													</select>
												</div>
											</div>
											<div class="field quarter">
												<input type="radio" id="demo-priority-low" name="demo-priority" class="color2" checked />
												<label for="demo-priority-low">Low Priority</label>
											</div>
											<div class="field quarter">
												<input type="radio" id="demo-priority-high" name="demo-priority" class="color2" />
												<label for="demo-priority-high">High Priority</label>
											</div>
											<div class="field quarter">
												<input type="checkbox" id="demo-copy" name="demo-copy" class="color2" />
												<label for="demo-copy">Email a copy</label>
											</div>
											<div class="field quarter">
												<input type="checkbox" id="demo-human" name="demo-human" class="color2" checked />
												<label for="demo-human">Not a robot</label>
											</div>
											<div class="field">
												<label for="demo-message">Message</label>
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="2"></textarea>
											</div>
											<ul class="actions">
												<li><input type="submit" value="Send Message" class="special color2" /></li>
												<li><input type="reset" value="Reset" /></li>
											</ul>
										</form>
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
