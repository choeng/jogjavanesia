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
<div class="section-half clearfix object-non-visible" data-animation-effect="fadeIn">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 id="about" class="title text-center">Yogyakarta <span>Tourism</span></h1>
				<div class="space"></div>
				<div class="row">
					<div class="col-md-12">
						<p>Yogyakarta city is commonly called Jogja or Yogya, a unique city with it magnificent tourist attractions and culture. The diversity of its custom and tradition, the friendliness of the society and the richness of the culture inheritance are like a magnet that strongly attracts everyone to get to know each other to explore and to enjoy every single part of the city.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<div class="section">
	<div class="container">
		<h1 class="text-center title object-non-visible" id="portfolio" data-animation-effect="fadeIn">Tourism Category</h1>
		<div class="separator"></div>
		<p class="lead text-center object-non-visible" data-animation-effect="fadeIn">Lorem ipsum dolor sit amet laudantium molestias similique.<br> Quisquam incidunt ut laboriosam.</p>
		<br>			
		<div class="row object-non-visible" data-animation-effect="fadeIn">
			<div class="col-md-12">

				<!-- isotope filters start -->
				<div class="filters text-center">
					<ul class="nav nav-pills">
						<li class="active"><a href="#" data-filter="*">All</a></li>
						<li><a href="#" data-filter=".history-and-culture">History and Culture</a></li>
						<li><a href="#" data-filter=".museum">Museum</a></li>
						<li><a href="#" data-filter=".education">Education</a></li>
						<li><a href="#" data-filter=".unique-culinary">Unique Culinary</a></li>
						<li><a href="#" data-filter=".shopping">Shopping</a></li>
						<li><a href="#" data-filter=".urban">Urban</a></li>
					</ul>
				</div>
				<!-- isotope filters end -->

				<!-- portfolio items start -->
				<div class="isotope-container row grid-space-20">
					<div class="col-sm-6 col-md-3 isotope-item history-and-culture">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Sultan Palace of Yogyakarta</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item history-and-culture">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Grand Mosque</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item history-and-culture">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Pakualaman Palace</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item history-and-culture">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Taman Sari Water Castle</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item history-and-culture">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Kota Gedhe</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item history-and-culture">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">The State Building</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item museum">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Sonobudoyo Museum</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item museum">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Sonobudoyo Museum 2<sup>nd</sup> Unit</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item museum">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Biology Museum</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item museum">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Sasana Wiratama Museum</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item museum">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Dharma Wiratama Army Museum</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item museum">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Batik & Embroidery Museum</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item museum">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Sasmita Loka Museum</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item museum">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Fort Vredeburg Museum</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item museum">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Bahari Museum</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item museum">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Perjuangan Museum</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item museum">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Sandi Museum</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item museum">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Anak Kolong Tangga Museum</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item education">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Taman Pintar</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item education">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Banana Plantation Garden</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item education">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Gembiraloka Zoo and Park</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item unique-culinary">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Angkringan & Jos Coffee</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item unique-culinary">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Culinary at Lesehan Malioboro</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item unique-culinary">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Gudeg Wijilan</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item unique-culinary">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Javanese Noodle</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item unique-culinary">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Kipo & Legomoro</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item unique-culinary">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Yangko & Bakpia Pathuk</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item shopping">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Malioboro Street</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item shopping">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">XT Square</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item shopping">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Klithikan Market</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item shopping">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Urip Sumoharjo</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item shopping">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Tirtodipuran</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item shopping">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Ngasem & Rotowijayan Street</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item shopping">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Book Market</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item shopping">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Beringharjo Market</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item urban">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Purbayan</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item urban">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Pandeyan</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item urban">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Cokrodiningratan</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item urban">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Kadipaten</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item urban">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Dipowinatan</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item museum">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">Dewantara Kirti Griya<br>Taman Siswa Museum</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item museum">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">1<sup>st</sup> March Serangan Umum<br>Monument</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3 isotope-item shopping">
						<div class="image-box">
							<div class="overlay-container">
								<img src="/assets/images/img.jpg" alt="">
							</div>
							<a class="btn btn-default btn-block">The Fauna and Nursery<br>Market of Yogyakarta</a>
						</div>
					</div>

				</div>
				<!-- portfolio items end -->

			</div>
		</div>
	</div>
</div>
<!-- section end -->
@stop