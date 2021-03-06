<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)

	Note: Only needed for demo purposes. Delete for production sites.
-->
<html>
	<head>
		<title>Story by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!-- Banner
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							<h1>Story</h1>
							<p class="major">A (modular, highly tweakable) responsive one-page template designed by <a href="https://html5up.net">HTML5 UP</a> and released for free under the <a href="https://html5up.net/license">Creative Commons</a>.</p>
							<p>This is a <strong>Banner</strong> element, and it's generally used as an introduction or opening statement. You can customize its <span class="demo-controls">appearance with a number of modifiers</span>, as well as assign it an optional <code>onload</code> or <code>onscroll</code> transition modifier (<a href="#reference-banner">details</a>).</p>
							<ul class="actions vertical">
								<li><a href="#first" class="button big wide smooth-scroll-middle">Get Started</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="images/banner.jpg" alt="" />
						</div>
					</section> -->

				<!-- Spotlight -->
                <table>
					
                  
               
                <?php
                    $con = mysqli_connect('localhost','root','','mysqli_login') or die("error!");
                    
                    $query = mysqli_query($con,"SELECT * FROM story");
                    while($row = mysqli_fetch_array($query))
    {?>
                <tr>
                    <td><section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first"><div class="content">
							
							<p><?php echo $row['content']; ?></p>
							<ul class="actions vertical">
								<li><a href="#" class="button">Learn More</a></li>
							</ul>
						</div>
                        <div class="image">
							<img src="images/spotlight01.jpg" alt="" />
						</div>
					</section></td>
                </tr>
                
                  <?php   
    }
    
        
                    ?>
                      </table>

				<!-- Spotlight 
					<section class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in">
						<div class="content">
							<h2>Spotlight</h2>
							<p>This is also a <strong>Spotlight</strong> element, and it's here because this demo would look a bit empty with just one spotlight. Like all spotlights, you can customize its <span class="demo-controls">appearance with a number of modifiers</span>, as well as assign it an optional <code>onload</code> or <code>onscroll</code> transition modifier (<a href="#reference-spotlight">details</a>).</p>
							<ul class="actions vertical">
								<li><a href="#" class="button">Learn More</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="images/spotlight02.jpg" alt="" />
						</div>
					</section>

				<!-- Spotlight 
					<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in">
						<div class="content">
							<h2>Spotlight</h2>
							<p>And yes, this is another <strong>Spotlight</strong> element, and it's also here because I need to fill a bit of space. Naturally, like any other spotlight, you can customize its <span class="demo-controls">appearance with a number of modifiers</span>, as well as assign it an optional <code>onload</code> or <code>onscroll</code> transition modifier (<a href="#reference-spotlight">details</a>).</p>
							<ul class="actions vertical">
								<li><a href="#" class="button">Learn More</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="images/spotlight03.jpg" alt="" />
						</div>
					</section>

				<!-- Gallery -->
					<section class="wrapper style1 align-center">
						<div class="inner">
							<h2>Gallery</h2>
							<p>This is a <strong>Gallery</strong> element. It can behave as a lightbox (when given the <code>lightbox</code> class), and you can customize its <span class="demo-controls">appearance with a number of modifiers</span>, as well as assign it an optional <code>onload</code> or <code>onscroll</code> transition modifier (<a href="#reference-gallery">details</a>).</p>
						</div>

						<!-- Gallery -->
							<div class="gallery style2 medium lightbox onscroll-fade-in">
								<article>
									<a href="images/gallery/fulls/01.jpg" class="image">
										<img src="images/gallery/thumbs/01.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/02.jpg" class="image">
										<img src="images/gallery/thumbs/02.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/03.jpg" class="image">
										<img src="images/gallery/thumbs/03.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/04.jpg" class="image">
										<img src="images/gallery/thumbs/04.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/05.jpg" class="image">
										<img src="images/gallery/thumbs/05.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/06.jpg" class="image">
										<img src="images/gallery/thumbs/06.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/07.jpg" class="image">
										<img src="images/gallery/thumbs/07.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/08.jpg" class="image">
										<img src="images/gallery/thumbs/08.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/09.jpg" class="image">
										<img src="images/gallery/thumbs/09.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/10.jpg" class="image">
										<img src="images/gallery/thumbs/10.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/11.jpg" class="image">
										<img src="images/gallery/thumbs/11.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/12.jpg" class="image">
										<img src="images/gallery/thumbs/12.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Title</h3>
										<p>Lorem ipsum dolor amet, consectetur magna etiam elit. Etiam sed ultrices.</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
							</div>

					</section>

				<!-- Items 
					<section class="wrapper style1 align-center">
						<div class="inner">
							<h2>Items</h2>
							<p>This is an <strong>Items</strong> element, and it's basically just a grid for organizing items of various types. You can customize its <span class="demo-controls">appearance with a number of modifiers</span>, as well as assign it an optional <code>onload</code> or <code>onscroll</code> transition modifier (<a href="#reference-items">details</a>).</p>
							<div class="items style1 medium onscroll-fade-in">
								<section>
									<span class="icon style2 major fa-diamond"></span>
									<h3>One</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-save"></span>
									<h3>Two</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-bar-chart"></span>
									<h3>Three</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-wifi"></span>
									<h3>Four</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-cog"></span>
									<h3>Five</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-paper-plane"></span>
									<h3>Six</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-desktop"></span>
									<h3>Seven</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-refresh"></span>
									<h3>Eight</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-hashtag"></span>
									<h3>Nine</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-bolt"></span>
									<h3>Ten</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-envelope"></span>
									<h3>Eleven</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
								<section>
									<span class="icon style2 major fa-leaf"></span>
									<h3>Twelve</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dui turpis, cursus eget orci amet aliquam congue semper. Etiam eget ultrices risus nec tempor elit.</p>
								</section>
							</div>
						</div>
					</section>

				<!-- Additional Elements 
					<section class="wrapper style1 align-center">
						<div class="inner">
							<h2>Additional Elements</h2>
							<p>Finally, here are some additional elements you <em>might</em> find useful (and yup, they look fine with any <span class="demo-controls">appearance</span>).</p>
							<div class="index align-left">

								<!-- Text 
									<section>
										<header>
											<h3>Text</h3>
										</header>
										<div class="content">

											<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
											This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
											This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>.
											Finally, this is a <a href="#">link</a>.</p>

										</div>
									</section>

								<!-- Heading
									<section>
										<header>
											<h3>Headings</h3>
										</header>
										<div class="content">

											<h1>Heading Level 1</h1>
											<h2>Heading Level 2</h2>
											<h3>Heading Level 3</h3>
											<h4>Heading Level 4</h4>
											<h5>Heading Level 5</h5>
											<h6>Heading Level 6</h6>

											<hr />

											<header>
												<h1>Heading with a Subtitle</h1>
												<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
											</header>
											<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>

											<hr />

											<header>
												<h2>Heading with a Subtitle</h2>
												<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
											</header>
											<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>

											<hr />

											<header>
												<h3>Heading with a Subtitle</h3>
												<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
											</header>
											<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>

										</div>
									</section>

								<!-- Unordered List 
									<section>
										<header>
											<h3>Unordered List</h3>
										</header>
										<div class="content">

											<h4>Default</h4>
											<ul>
												<li>Lorem ipsum dolor sit amet</li>
												<li>Interdum adipiscing gravida odio</li>
												<li>Porttitor sem non integer</li>
												<li>Non faucibus ornare mi ut ante</li>
												<li>Sagittis adipiscing eleifend</li>
												<li>Felis amet dolore viverra</li>
											</ul>

											<h4>Alternate</h4>
											<ul class="alt">
												<li>Lorem ipsum dolor sit amet</li>
												<li>Interdum adipiscing gravida odio</li>
												<li>Porttitor sem non integer</li>
												<li>Non faucibus ornare mi ut ante</li>
												<li>Sagittis adipiscing eleifend</li>
												<li>Felis amet dolore viverra</li>
											</ul>

										</div>
									</section>

								<!-- Ordered List 
									<section>
										<header>
											<h3>Ordered List</h3>
										</header>
										<div class="content">

											<ol>
												<li>Lorem ipsum dolor sit amet</li>
												<li>Interdum adipiscing gravida odio</li>
												<li>Porttitor sem non integer</li>
												<li>Non faucibus ornare mi ut ante</li>
												<li>Sagittis adipiscing eleifend</li>
												<li>Felis amet dolore viverra</li>
											</ol>

										</div>
									</section>

								<!-- Definition List
									<section>
										<header>
											<h3>Definition List</h3>
										</header>
										<div class="content">

											<dl>
												<dt>Interdum adipiscing odio</dt>
												<dd>
													<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent fringilla quis tincidunt felis sagittis eget tempus euismod. Ante ipsum primis vestibulum.</p>
												</dd>
												<dt>Non faucibus ornare mi ut ante</dt>
												<dd>
													<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent fringilla quis tincidunt felis sagittis eget tempus euismod. Ante ipsum primis vestibulum.</p>
												</dd>
												<dt>Felis amet dolore viverra</dt>
												<dd>
													<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent fringilla quis tincidunt felis sagittis eget tempus euismod. Ante ipsum primis vestibulum.</p>
												</dd>
											</dl>

										</div>
									</section>

								<!-- Blockquote 
									<section>
										<header>
											<h3>Blockquote</h3>
										</header>
										<div class="content">

											<blockquote>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent fringilla quis tincidunt felis sagittis eget tempus euismod. Ante ipsum primis vestibulum.</blockquote>

										</div>
									</section>

								<!-- Code
									<section>
										<header>
											<h3>Code</h3>
										</header>
										<div class="content">

											<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';
</code></pre>

										</div>
									</section>

								<!-- Icons
									<section>
										<header>
											<h3>Icons</h3>
										</header>
										<div class="content">

											<h4>Style #1</h4>
											<ul class="icons">
												<li><a href="#" class="icon style1 fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon style1 fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="icon style1 fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="icon style1 fa-github"><span class="label">Github</span></a></li>
												<li><a href="#" class="icon style1 fa-dribbble"><span class="label">Dribbble</span></a></li>
											</ul>

											<h4>Style #2</h4>
											<ul class="icons">
												<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="icon style2 fa-github"><span class="label">Github</span></a></li>
												<li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
											</ul>

										</div>
									</section>

								<!-- Buttons -->

							


								
										

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

		<!-- Note: Only needed for demo purposes. Delete for production sites. -->
			<script src="assets/js/demo.js"></script>

	</body>
</html>
