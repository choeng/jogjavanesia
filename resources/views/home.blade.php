@extends('layout')
@section('content')

<!-- banner start -->
<!-- ================ -->
<div id="banner" class="content banner">
	<div class="banner-image"></div>
	<div class="banner-caption">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
					<h1 class="text-center">Welcome to <span>Jogja</span></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- banner end -->

<!-- section start -->
<!-- ================ -->
<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 id="about" class="title text-center">About <span>Jogja</span></h1>
				<div class="space"></div>
				<div class="row">
					<div class="col-md-6">
						<img src="/assets/images/img.jpg" alt="Jogja">
						<div class="space"></div>
					</div>
					<div class="col-md-6">
						<p>Yogyakarta city is commonly called Jogja or Yogya, a unique city with it magnificent tourist attractions and culture. The diversity of its custom and tradition, the friendliness of the society and the richness of the culture inheritance are like a magnet that strongly attracts everyone to get to know each other to explore and to enjoy every single part of the city.</p>
						<ul class="list-unstyled">
							<li><i class="fa fa-caret-right pr-10 text-colored"></i> Yogyakarta is <b>Amazing</b></li>
							<li><i class="fa fa-caret-right pr-10 text-colored"></i> Yogyakarta is <b>Caring</b></li>
							<li><i class="fa fa-caret-right pr-10 text-colored"></i> Yogyakarta is <b>Full of Stories</b></li>
							<li><i class="fa fa-caret-right pr-10 text-colored"></i> Yogyakarta <b>Welcome You</b></li>
						</ul>
					</div>
				</div>
				<div class="space"></div>
				<h2>General Description of Yogyakarta City</h2>
				<div class="row">
					<div class="col-md-6">
						<p>During the independence war of Indonesia, Yogyakarta played a major role in contributing the process of the independence. Many national heroes who were born in Yogyakarta, like Ki Hajar Dewantara, K H Ahmad Dahlan, Sri Sultan Hamengkubuwono IX and many more, gave major contributions to the nation.</p> 
						<p>There are many important events happened in Yogyakarta, one of them is 1<sup>st</sup> March Attack in 1949. Yogyakarta also used to be the capital city of Indonesia during 1946-1949. In addition, the city has been reowned as the Education City since many students from all around Indonesia and even abroad, come here to study.</p>
						<p>As the center of culture and art, Yogyakarta offers many accesses to experience Javanese culture through art performances, like classical dances, puppet shows, and many others/traditional values and Javanese Culture are well uphold as the basic capital in developing the city to face the future, especially to be one of the main tourist destinations in Indonesia.</p>
					</div>
					<div class="col-md-6">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#geographicalMap" aria-expanded="true" aria-controls="geographicalMap">
											Geographical Map
										</a>
									</h4>
								</div>
								<div id="geographicalMap" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
										Generally, Yogyakarta is a low land with flat surface stretched from west to east and one degree declination from north to south. It is crossed by three rivers, they are: Gajah Wong River on the east side, Code River in the middle of the city, and Winongo River flows at the east side.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#theArea" aria-expanded="false" aria-controls="theArea">
											The Area
										</a>
									</h4>
								</div>
								<div id="theArea" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
										The city covers 32,5 km<sup>2</sup> or equals to 1,025% of Yogyakarta Province total area, and consists of 14 sub districts, 45 kelurahan with &plusmn; 400.000 inhabitants population densities in average.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#theClimate" aria-expanded="false" aria-controls="theClimate">
											The Climate
										</a>
									</h4>
								</div>
								<div id="theClimate" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									<div class="panel-body">
										The city has tropical climate with two seasons: dry season from May until September and rainy season from October until April. During May, June, and July, Yogyakarta has its best season throughout the year as daily temperature is between 22&deg;C - 30&deg;C and the humidity is 75% in average.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
	<div class="container">
		<h1 class="text-center title" id="editor">Editor <span>Picks</span></h1>
		<div class="separator"></div>
		<p class="lead text-center">Start your journey by reading articles below.</p>
		<br>			
		<div class="row object-non-visible" data-animation-effect="fadeIn">
			<div class="col-md-12">

				<!-- editor items start -->
				<div class="isotope-container row grid-space-20">
					<div class="col-sm-6 col-md-4 isotope-item web-design">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
								<a class="overlay" data-toggle="modal" data-target="#project-1">
									<i class="fa fa-search-plus"></i>
									<span>Editor Picks</span>
								</a>
							</div>
							<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-1">Tourist Tips</a>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										<h4 class="modal-title" id="project-1-label">Tourist Tips</h4>
									</div>
									<div class="modal-body">
										<h3>General Tips</h3>
										<div class="row">
											<div class="col-md-6">
												<div class="media">
													<div class="media-body text-right">
														<h4 class="media-heading">#1</h4>
														<p>Do not forget to bring Yogyakarta Tourism Map to find the tourism objects and attractions easily. You can download the map <a href="/map">here.</a></p>
													</div>
													<div class="media-right">
														<i class="fa fa-map"></i>
													</div>
												</div>
												<div class="media">
													<div class="media-body text-right">
														<h4 class="media-heading">#2</h4>
														<p>Park your vehicles in the available parking area and do not forget to ask for an official and new parking ticket (not a used one).</p>
													</div>
													<div class="media-right">
														<i class="fa fa-car"></i>
													</div>
												</div>
												<div class="media">
													<div class="media-body text-right">
														<h4 class="media-heading">#3</h4>
														<p>If you take public transportation, ask for the closest route to the place you intend to go. And if you take a taxi, get into the one which uses an argometer.</p>
													</div>
													<div class="media-right">
														<i class="fa fa-location-arrow"></i>
													</div>
												</div>
												<div class="media">
													<div class="media-body text-right">
														<h4 class="media-heading">#4</h4>
														<p>If you take a becak (pedicab) / andong (horse cart), make a deal about the price in advance.</p>
													</div>
													<div class="media-right">
														<i class="fa fa-money"></i>
													</div>
												</div>
											</div>
											<div class="space visible-xs"></div>
											<div class="col-sm-6">
												<div class="media">
													<div class="media-left">
														<i class="fa fa-calculator"></i>
													</div>
													<div class="media-body">
														<h4 class="media-heading">#5</h4>
														<p>If you shop for souvenirs or anything in traditional markets or street vendors, bargain down the price.</p>
													</div>
												</div>
												<div class="media">
													<div class="media-left">
														<i class="fa fa-list"></i>
													</div>
													<div class="media-body">
														<h4 class="media-heading">#6</h4>
														<p>If you have meals in a lesehan on Malioboro Street, ask for the menu list and make sure the price is fixed before you order.</p>
													</div>
												</div>
												<div class="media">
													<div class="media-left">
														<i class="fa fa-suitcase"></i>
													</div>
													<div class="media-body">
														<h4 class="media-heading">#7</h4>
														<p>Keep an eye of your own valuables when you are in public area.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal end -->
					</div>

					<div class="col-sm-6 col-md-4 isotope-item app-development">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
								<a class="overlay" data-toggle="modal" data-target="#project-2">
									<i class="fa fa-search-plus"></i>
									<span>Editor Picks</span>
								</a>
							</div>
							<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-2">Top 5 or 10 Place to visit</a>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										<h4 class="modal-title" id="project-2-label">Top 5 or 10 Place to visit</h4>
									</div>
									<div class="modal-body">
										<h3>Description</h3>
										<div class="row">
											<div class="col-md-6">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
												<p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
											</div>
											<div class="col-md-6">
												<img src="/assets/images/img.jpg" alt="">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal end -->
					</div>

					<div class="col-sm-6 col-md-4 isotope-item web-design">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
								<a class="overlay" data-toggle="modal" data-target="#project-3">
									<i class="fa fa-search-plus"></i>
									<span>Editor Picks</span>
								</a>
							</div>
							<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-3">Start Your Journey</a>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										<h4 class="modal-title" id="project-3-label">Start Your Journey</h4>
									</div>
									<div class="modal-body">
										<h3>Description</h3>
										<div class="row">
											<div class="col-md-6">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque sed, quidem quis praesentium, ut unde. Quae sed, incidunt laudantium nesciunt, optio corporis quod earum pariatur omnis illo saepe numquam suscipit, nemo placeat dignissimos eius mollitia et quas officia doloremque ipsum labore rem deserunt vero! Magnam totam delectus accusantium voluptas et, tempora quos atque, fugiat, obcaecati voluptatibus commodi illo voluptates dolore nemo quo soluta quis.</p>
												<p>Molestiae sed enim laboriosam atque delectus voluptates rerum nostrum sapiente obcaecati molestias quasi optio exercitationem, voluptate quis consequatur libero incidunt, in, quod. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos nobis officiis, autem earum tenetur quidem. Quae non dicta earum. Ipsum autem eaque cum dolor placeat corporis quisquam dolorum at nesciunt.</p>
											</div>
											<div class="col-md-6">
												<img src="/assets/images/img.jpg" alt="">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Modal end -->
					</div>

				</div>
				<!-- editor items end -->

			</div>
		</div>
	</div>
</div>
<!-- section end -->

<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
	<div class="container">
		<h1 class="text-center title" id="quote">Shared <span>Moments</span></h1>
		<div class="separator"></div>
		<script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
		<link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
		<ul class="juicer-feed" data-feed-id="lorenciuse">
			<h1 class="referral"><a href="http://www.juicer.io">Powered by Juicer</a></h1>
		</ul>
	</div>
</div>


<!-- section start -->
<!-- ================ -->
<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
	<div class="container">
		<h1 class="text-center title" id="quote">Weekly <span>Quotes</span></h1>
		<div class="separator"></div>
		<div class='col-md-offset-2 col-md-8'>
			<div class="carousel slide" data-ride="carousel" id="quote-carousel">
				<!-- Bottom Carousel Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#quote-carousel" data-slide-to="1"></li>
					<li data-target="#quote-carousel" data-slide-to="2"></li>
				</ol>

				<!-- Carousel Slides / Quotes -->
				<div class="carousel-inner">

					<!-- Quote 1 -->
					<div class="item active">
						<blockquote>
							<div class="row">
								<div class="col-sm-3 text-center">
									<img class="img-circle" src="/assets/images/img.jpg" style="width: 100px;height:100px;">
								</div>
								<div class="col-sm-9">
									<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
									<small>Someone famous</small>
								</div>
							</div>
						</blockquote>
					</div>
					<!-- Quote 2 -->
					<div class="item">
						<blockquote>
							<div class="row">
								<div class="col-sm-3 text-center">
									<img class="img-circle" src="/assets/images/img.jpg" style="width: 100px;height:100px;">
								</div>
								<div class="col-sm-9">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
									<small>Someone famous</small>
								</div>
							</div>
						</blockquote>
					</div>
					<!-- Quote 3 -->
					<div class="item">
						<blockquote>
							<div class="row">
								<div class="col-sm-3 text-center">
									<img class="img-circle" src="/assets/images/img.jpg" style="width: 100px;height:100px;">
								</div>
								<div class="col-sm-9">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
									<small>Someone famous</small>
								</div>
							</div>
						</blockquote>
					</div>
				</div>

				<!-- Carousel Buttons Next/Prev -->
				<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
				<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
			</div>                          
		</div>
	</div>
</div>
<!-- section end -->

@stop