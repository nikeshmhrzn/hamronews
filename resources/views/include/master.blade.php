<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>HamroNews</title>

		<!-- Google font -->
		<link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400')}}" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
		<link type="text/css" rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}" />

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->


        <style>

        a:hover{
            color:tomato !important;
        }
        </style>
    </head>

	<body>

<!-- Header -->
<header id="header">
    <!-- Top Header -->
    <div id="top-header">
        <div class="container">
            <div class="header-links">
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Advertisement</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#"><i class="fa fa-sign-in"></i> Login</a></li>
                </ul>
            </div>
            <div class="header-social">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Top Header -->

    <!-- Center Header -->
    <div id="center-header">
        <div class="container">
            <div class="header-logo">
                <a href="/" class="logo"><img src="{{asset('./img/logo.png')}}" alt=""></a>
            </div>
            <div class="header-ads">
                <img class="center-block" src="{{asset('./img/ad-2.jpg')}}" alt="">
            </div>
        </div>
    </div>
    <!-- /Center Header -->
    {{-- @yield('header') --}}

<!-- /Header -->

<!-- Nav Header -->
<div id="nav-header">
<div class="container">
<nav id="main-nav">
    <div class="nav-logo">
        <a href="#" class="logo"><img src="{{asset('./img/logo-alt.png')}}" alt=""></a>
    </div>
    <ul class="main-nav nav navbar-nav">
        <li>
            @foreach($categories as $category)
            {{-- <li> --}}
            <a class="navbar-brand" href="{{url('Categories/' .$category->id)}}">{{$category->name}}</a>

        @endforeach
    </li>
    </ul>
</nav>
<div class="button-nav">
    <button class="search-collapse-btn"><i class="fa fa-search"></i></button>
    <button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
    <div class="search-form">
        <form>
            <input class="input" type="text" name="search" placeholder="Search">
        </form>
    </div>
</div>
</div>
</div>
</header>
<!-- /Nav Header -->




        @yield('one')
        @yield('trendpost')
        @yield('news')

        @yield('popularpost')

        @yield('content')

        @yield('just')
        @yield('edit')
        @yield('create')
        @yield('detail')
        @yield('navigation')

		<!-- FOOTER -->
		<footer id="footer">
			<!-- Top Footer -->
			<div id="top-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- Column 1 -->
						<div class="col-md-4">
							<!-- footer about -->
							<div class="footer-widget about-widget">
								<div class="footer-logo">
									<a href="/" class="logo"><img src="{{asset('./img/logo-alt.png')}}" alt=""></a>
									<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
								</div>
							</div>
							<!-- /footer about -->

							<!-- footer social -->
							<div class="footer-widget social-widget">
								<div class="widget-title">
									<h3 class="title">Follow Us</h3>
								</div>
								<ul>
									<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#" class="google"><i class="fa fa-google"></i></a></li>
									<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
							<!-- /footer social -->

							<!-- footer subscribe -->
							<div class="footer-widget subscribe-widget">
								<div class="widget-title">
									<h2 class="title">Subscribe to Newslatter</h2>
								</div>
								<form>
									<input class="input" type="email" placeholder="Enter Your Email">
									<button class="input-btn">Subscribe</button>
								</form>
							</div>
							<!-- /footer subscribe -->
						</div>
						<!-- /Column 1 -->

						<!-- Column 2 -->
						<div class="col-md-4">
							<!-- footer article -->
							<div class="footer-widget">
								<div class="widget-title">
									<h2 class="title">Featured Posts</h2>
								</div>

								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('./img/img-widget-1.jpg')}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->

								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="{{asset('./img/img-widget-2.jpg')}}" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->

								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
										<a href="#">
											<img src="./img/img-widget-3.jpg" alt="">
										</a>
									</div>
									<div class="article-body">
										<h4 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h4>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /footer article -->
						</div>
						<!-- /Column 2 -->

						<!-- Column 3 -->
						<div class="col-md-4">
							<!-- footer galery -->
							<div class="footer-widget galery-widget">
								<div class="widget-title">
									<h2 class="title">Flickr Photos</h2>
								</div>
								<ul>
									<li><a href="#"><img src="{{asset('./img/img-widget-3.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('./img/img-widget-4.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('./img/img-widget-5.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('./img/img-widget-6.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('./img/img-widget-7.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('./img/img-widget-8.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('./img/img-widget-9.jpg')}}" alt=""></a></li>
									<li><a href="#"><img src="{{asset('./img/img-widget-10.jpg')}}" alt=""></a></li>
								</ul>
							</div>
							<!-- /footer galery -->

							<!-- footer tweets -->
							<div class="footer-widget tweets-widget">
								<div class="widget-title">
									<h2 class="title">Recent Tweets</h2>
								</div>
								<ul>
									<li class="tweet">
										<i class="fa fa-twitter"></i>
										<div class="tweet-body">
											<p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
										</div>
									</li>
								</ul>
							</div>
							<!-- /footer tweets -->
						</div>
						<!-- /Column 3 -->
					</div>
					<!-- /ROW -->
				</div>
				<!-- /CONTAINER -->
			</div>
			<!-- /Top Footer -->

			<!-- Bottom Footer -->
			<div id="bottom-footer" class="section">
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<!-- footer links -->
						<div class="col-md-6 col-md-push-6">
							<ul class="footer-links">
								<li><a href="#">About us</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Advertisement</a></li>
								<li><a href="#">Privacy</a></li>
							</ul>
						</div>
						<!-- /footer links -->

						<!-- footer copyright -->
						<div class="col-md-6 col-md-pull-6">
							<div class="footer-copyright">
								<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
							</div>
						</div>
						<!-- /footer copyright -->
					</div>
					<!-- /ROW -->
				</div>
				<!-- /CONTAINER -->
			</div>
			<!-- /Bottom Footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- Back to top -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
