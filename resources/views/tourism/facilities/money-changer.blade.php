@extends('layout')
@section('content')

<!-- carousel start -->
<!-- ================ -->
<ul id="his-slider">
	<li>
		<img src="/assets/images/jogja-mural.jpg" alt="<a href='#link'>Visit here!</a> to get some beautiful place to stay.">
	</li>
	<li>
		<img src="/assets/images/jogja-mural.jpg" alt="Delicious Foods <a href='#link'>Here</a>">
	</li>
</ul>
<!-- carousel end -->

<!-- section start -->
<!-- ================ -->
<div class="clearfix object-non-visible" data-animation-effect="fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><a href="/">Home</a></li>
					<li><a href="/tourism/">Tourism</a></li>
					<li class="active">History and Culture Tourism</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<div class="section-half clearfix object-non-visible" data-animation-effect="fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 id="about" class="title text-center">History and Culture <span>Tourism</span></h1>
				<div class="space"></div>
				<div class="row">
					<div class="col-md-12">
						<p>Yogyakarta city is commonly called Jogja or Yogya, a unique city with it magnificent tourist attractions and culture. The diversity of its custom and tradition, the friendliness of the society and the richness of the culture inheritance are like a magnet that strongly attracts everyone to get to know each other to explore and to enjoy every single part of the city.</p>
					</div>
				</div>
				<div class="space"></div>
				<h2>List of History and Culture Tourism</h2>
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
	</div>
</div>
<!-- section end -->

@stop