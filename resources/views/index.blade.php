@extends('include.master')

@section('one')
        <!-- Owl Carousel 1 -->

		<div id="owl-carousel-1" class="owl-carousel owl-theme center-owl-nav">
                @foreach($imageTops as $image)
			<!-- ARTICLE -->
			<article class="article thumb-article">
				<div class="article-img">

					    <img src="{{asset('storage/images/news/'. $image->image)}}" alt="" height="500" width="500">

                </div>
				<div class="article-body">
					<ul class="article-info">
                        {{-- @foreach($categories as $category) --}}
                    <li class="article-category"><a href="{{url('Categories/' .$image->category->id)}}">{{$image->category->name}}</a></li>
                        {{-- @endforeach --}}
                    <li class="article-type"><i class="fa fa-camera"></i></li>
					</ul>
                <h2 class="article-title"><a href="{{url('More/'.$image->id)}}">{{$image->headlines}}</a></h2>
					<ul class="article-meta">
						<li style="color:black !important;" ><i class="fa fa-clock-o"></i> {{$image->created_at->diffForHumans()}}</li>
						<li><i class="fa fa-comments"></i> 33</li>
					</ul>
				</div>
			</article>
			<!-- /ARTICLE -->

            @endforeach
        </div>

        <!-- /Owl Carousel 1 -->

        @endsection

        @section('trendpost')
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">Trending Posts</h2>
							<!-- tab nav -->
							{{-- <ul class="tab-nav pull-right">
								<li class="active"><a data-toggle="tab" href="#tab1">All</a></li>
								<li><a data-toggle="tab" href="#tab1">News</a></li>
								<li><a data-toggle="tab" href="#tab1">Sport</a></li>
								<li><a data-toggle="tab" href="#tab1">Music</a></li>
								<li><a data-toggle="tab" href="#tab1">Business</a></li>
								<li><a data-toggle="tab" href="#tab1">Lifestyle</a></li>
							</ul> --}}
							<!-- /tab nav -->
						</div>
						<!-- /section title -->

						<!-- Tab content -->
						<div class="tab-content">
                            <!-- tab1 -->

							<div id="tab1" class="tab-pane fade in active">
								<!-- row -->
								<div class="row">
                                    <!-- Column 1 -->
                                    @foreach($trendingPost as $trending)
									<div class="col-md-3 col-sm-6">
										<!-- ARTICLE -->
										<article class="article">
											<div class="article-img">
												<a href="{{url('More/'.$trending->id)}}">
													<img src="{{asset('storage/images/news/'. $trending->image)}}" alt="" height="200" width="100">
												</a>
												<ul class="article-info">
													<li class="article-type"><i class="fa fa-camera"></i></li>
												</ul>
											</div>
											<div class="article-body">
                                            <h4 class="article-title"><a href="{{url('More/'.$trending->id)}}">{{$trending->headlines}}</a></h4>
												<ul class="article-meta">
													<li style="color:black !important;"><i class="fa fa-clock-o"></i> {{$trending->created_at->diffForHumans()}} </li>
													<li><i class="fa fa-comments"></i> 33</li>
												</ul>
											</div>
                                        </article>

										<!-- /ARTICLE -->
									</div>
									<!-- /Column 1 -->
                                    @endforeach
								</div>
								<!-- /row -->

							</div>
							<!-- /tab1 -->
						</div>
						<!-- /tab content -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
        <!-- /SECTION -->
        @endsection


        @section('news')
		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">
						<!-- row -->
						<div class="row">
							<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
								<!-- section title -->
								<div class="section-title">
									<h2 class="title">Politics</h2>
								</div>
								<!-- /section title -->

                                @foreach ($politicsNews as $politics)


								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="{{url('More/'.$politics->id)}}">
											<img src="{{asset('storage/images/news/'. $politics->image)}}" alt="" height="250" width="100">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
                                    <h3 class="article-title"><a href="{{url('More/'.$politics->id)}}">{{$politics->headlines}}</a></h3>
										<ul class="article-meta">
											<li style="color:black !important;"><i class="fa fa-clock-o"></i>{{$politics->created_at->diffForHumans()}} </li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
                                    <p>{{Str::limit($politics->description,180)}}</p>
									</div>
								</article>
                                <!-- /ARTICLE -->
                                @endforeach



                        @foreach($politicsCategory as $politics)
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
                                            <a href="{{url('More/'.$politics->id)}}">
											<img src="{{asset('storage/images/news/'. $politics->image)}}" alt="">
                                            </a>
									</div>
									<div class="article-body">
									<h4 class="article-title"><a href="{{url('More/'.$politics->id)}}">{{$politics->headlines}}</a></h4>
										<ul class="article-meta">
											<li style="color:black !important;"><i class="fa fa-clock-o"></i>{{$politics->created_at->diffForHumans()}}</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
                        @endforeach
							</div>


							<!-- Column 2 -->
							<div class="col-md-6 col-sm-6">
								<!-- section title -->
								<div class="section-title">
									<h2 class="title">Economics</h2>
								</div>
								<!-- /section title -->

                                @foreach($economicsNews as $economics)
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
                                            <a href="{{url('More/'.$economics->id)}}">
											<img src="{{asset('storage/images/news/'. $economics->image)}}" alt="" height="250" width="100">
                                            </a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
                                    <h3 class="article-title"><a href="{{url('More/'.$economics->id)}}">{{$economics->headlines}}</a></h3>
										<ul class="article-meta">
											<li style="color:black !important;"><i class="fa fa-clock-o"></i>{{$economics->created_at->diffForHumans()}}</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
                                    <p>{{Str::limit($economics->description,180)}}</p>
									</div>
								</article>
                                <!-- /ARTICLE -->
                                @endforeach

                                @foreach($economicsCategory as $economics)
								<!-- ARTICLE -->
								<article class="article widget-article">
									<div class="article-img">
                                        <a href="{{url('More/'.$economics->id)}}">
											<img src="{{asset('storage/images/news/'. $economics->image)}}" alt="">
                                        </a>
									</div>
									<div class="article-body">
                                    <h4 class="article-title"><a href="{{url('More/'.$economics->id)}}">{{$economics->headlines}}</a></h4>
										<ul class="article-meta">
											<li style="color:black !important;"><i class="fa fa-clock-o"></i> {{$economics->created_at->diffForHumans()}}</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
                                @endforeach

							</div>
							<!-- /Column 2 -->
						</div>
						<!-- /row -->

						<!-- row -->
						<div class="row">

							<!-- section title -->
							<div class="col-md-12">
								<div class="section-title">
									<h2 class="title">Fashion</h2>
								</div>
							</div>
							<!-- /section title -->

                            @foreach($fashionsNews as $fashion)

							<!-- Column 1 -->
							<div class="col-md-6 col-sm-6">
                                <!-- ARTICLE -->

								<article class="article">
									<div class="article-img">
										<a href="{{url('More/'.$fashion->id)}}">
											<img src="{{asset('storage/images/news/'. $fashion->image)}}" alt="" height="300" width="400">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-camera"></i></li>
										</ul>
									</div>
									<div class="article-body">
                                    <h3 class="article-title"><a href="{{url('More/'.$fashion->id)}}">{{$fashion->headlines}}</a></h3>
										<ul class="article-meta">
											<li style="color:black !important;"><i class="fa fa-clock-o"></i> {{$fashion->created_at->diffForHumans()}}</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
                                    <p>{{Str::limit($fashion->description,180)}}</p>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
                            @endforeach
						</div>
						<!-- /row -->



						<!-- row -->
						<div class="row">
                                @foreach($fashionCategory as $fashion)
							<!-- Column 1 -->
							<div class="col-md-4 col-sm-4">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="{{url('More/'.$fashion->id)}}">
											<img src="{{asset('storage/images/news/'. $fashion->image)}}" alt="" height="200" width="100">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
									</div>
									<div class="article-body">
                                    <h4 class="article-title"><a href="{{url('More/'.$fashion->id)}}">{{$fashion->headlines}}</a></h4>
										<ul class="article-meta">
											<li style="color:black !important;"><i class="fa fa-clock-o"></i>{{$fashion->created_at->diffForHumans()}}</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /Column 1 -->
                            @endforeach
						</div>
						<!-- /row -->
					</div>
					<!-- /Main Column -->

					<!-- Aside Column -->
					<div class="col-md-4">
						<!-- Ad widget -->
						<div class="widget center-block hidden-xs">
							<img class="center-block" src="./img/ad-1.jpg" alt="">
						</div>
						<!-- /Ad widget -->

						<!-- social widget -->
						<div class="widget social-widget">
							<div class="widget-title">
								<h2 class="title">Stay Connected</h2>
							</div>
							<ul>
								<li><a href="#" class="facebook"><i class="fa fa-facebook"></i><br><span>Facebook</span></a></li>
								<li><a href="#" class="twitter"><i class="fa fa-twitter"></i><br><span>Twitter</span></a></li>
								<li><a href="#" class="google"><i class="fa fa-google"></i><br><span>Google+</span></a></li>
								<li><a href="#" class="instagram"><i class="fa fa-instagram"></i><br><span>Instagram</span></a></li>
								<li><a href="#" class="youtube"><i class="fa fa-youtube"></i><br><span>Youtube</span></a></li>
								<li><a href="#" class="rss"><i class="fa fa-rss"></i><br><span>RSS</span></a></li>
							</ul>
						</div>
						<!-- /social widget -->

						<!-- subscribe widget -->
						<div class="widget subscribe-widget">
							<div class="widget-title">
								<h2 class="title">Subscribe to Newslatter</h2>
							</div>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="input-btn">Subscribe</button>
							</form>
						</div>
						<!-- /subscribe widget -->

						<!-- article widget -->
						<div class="widget">
							<div class="widget-title">
								<h2 class="title">Most Read</h2>
							</div>

							<!-- owl carousel 3 -->
							<div id="owl-carousel-3" class="owl-carousel owl-theme center-owl-nav">
								<!-- ARTICLE -->
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="./img/img-md-3.jpg" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
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
								<article class="article">
									<div class="article-img">
										<a href="#">
											<img src="./img/img-md-4.jpg" alt="">
										</a>
										<ul class="article-info">
											<li class="article-type"><i class="fa fa-file-text"></i></li>
										</ul>
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
							<!-- /owl carousel 3 -->

							<!-- ARTICLE -->
							<article class="article widget-article">
								<div class="article-img">
									<a href="#">
										<img src="./img/img-widget-1.jpg" alt="">
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
										<img src="./img/img-widget-2.jpg" alt="">
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
						<!-- /article widget -->
					</div>
					<!-- /Aside Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
        <!-- /SECTION -->

        @endsection



        @section('popularpost')
		<!-- AD SECTION -->
		<div class="visible-lg visible-md">
			<img class="center-block" src="./img/ad-3.jpg" alt="">
		</div>
		<!-- /AD SECTION -->


		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-8">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">Popular Posts</h2>
						</div>
						<!-- /section title -->

						<!-- ARTICLE -->
						<article class="article row-article">
							<div class="article-img">
								<a href="#">
									<img src="./img/img-md-1.jpg" alt="">
								</a>
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">News</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
								<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
							</div>
						</article>
						<!-- /ARTICLE -->

						<!-- ARTICLE -->
						<article class="article row-article">
							<div class="article-img">
								<a href="#">
									<img src="./img/img-md-2.jpg" alt="">
								</a>
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">News</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
								<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
							</div>
						</article>
						<!-- /ARTICLE -->

						<!-- ARTICLE -->
						<article class="article row-article">
							<div class="article-img">
								<a href="#">
									<img src="./img/img-md-3.jpg" alt="">
								</a>
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">News</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
								<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
							</div>
						</article>
						<!-- /ARTICLE -->

						<!-- ARTICLE -->
						<article class="article row-article">
							<div class="article-img">
								<a href="#">
									<img src="./img/img-md-4.jpg" alt="">
								</a>
							</div>
							<div class="article-body">
								<ul class="article-info">
									<li class="article-category"><a href="#">News</a></li>
									<li class="article-type"><i class="fa fa-file-text"></i></li>
								</ul>
								<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
								<ul class="article-meta">
									<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
									<li><i class="fa fa-comments"></i> 33</li>
								</ul>
								<p>Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis, ne alia sadipscing mei. Te inciderint cotidieque pro, ei iisque docendi qui.</p>
							</div>
						</article>
						<!-- /ARTICLE -->

						<!-- pagination -->
						<div class="article-pagination">
							<ul>
								<li class="active"><a href="#" class="active">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /pagination -->
					</div>
					<!-- /Main Column -->

                    {{-- hereh add sapcw --}}
					<!-- Aside Column -->
					<div class="col-md-4">
						<!-- article widget -->
						<div class="widget">
							<div class="widget-title">
								<h2 class="title">Featured Posts</h2>
							</div>

							<!-- owl carousel 4 -->
							<div id="owl-carousel-4" class="owl-carousel owl-theme">
								<!-- ARTICLE -->
								<article class="article thumb-article">
									<div class="article-img">
										<img src="./img/img-thumb-1.jpg" alt="">
									</div>
									<div class="article-body">
										<ul class="article-info">
											<li class="article-category"><a href="#">News</a></li>
											<li class="article-type"><i class="fa fa-video-camera"></i></li>
										</ul>
										<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->

								<!-- ARTICLE -->
								<article class="article thumb-article">
									<div class="article-img">
										<img src="./img/img-thumb-2.jpg" alt="">
									</div>
									<div class="article-body">
										<ul class="article-info">
											<li class="article-category"><a href="#">News</a></li>
											<li class="article-type"><i class="fa fa-video-camera"></i></li>
										</ul>
										<h3 class="article-title"><a href="#">Duis urbanitas eam in, tempor consequat.</a></h3>
										<ul class="article-meta">
											<li><i class="fa fa-clock-o"></i> January 31, 2017</li>
											<li><i class="fa fa-comments"></i> 33</li>
										</ul>
									</div>
								</article>
								<!-- /ARTICLE -->
							</div>
							<!-- /owl carousel 4 -->
						</div>
						<!-- /article widget -->

						<!-- galery widget -->
						<div class="widget galery-widget">
							<div class="widget-title">
								<h2 class="title">Flickr Photos</h2>
							</div>
							<ul>
								<li><a href="#"><img src="./img/img-widget-3.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/img-widget-4.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/img-widget-5.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/img-widget-6.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/img-widget-7.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/img-widget-8.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/img-widget-9.jpg" alt=""></a></li>
								<li><a href="#"><img src="./img/img-widget-10.jpg" alt=""></a></li>
							</ul>
						</div>
						<!-- /galery widget -->

						<!-- tweets widget -->
						<div class="widget tweets-widget">
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
								<li class="tweet">
									<i class="fa fa-twitter"></i>
									<div class="tweet-body">
										<p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
									</div>
								</li>
								<li class="tweet">
									<i class="fa fa-twitter"></i>
									<div class="tweet-body">
										<p><a href="#">@magnews</a> Populo tritani laboramus ex mei, no eum iuvaret ceteros euripidis <a href="#">https://t.co/DwsTbsmxTP</a></p>
									</div>
								</li>
							</ul>
						</div>
						<!-- /tweets widget -->
					</div>
					<!-- /Aside Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->
@endsection
