<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Z-Project</title>
	<link rel="stylesheet" href="{{url('css/app.css')}}">

</head>

<body>

	<header>
		<section id="home">
			<div class="img-mio-logo">

			</div>
			<div class="mio-menu responsive">
				<div class="navbar navbar-nobg ">
					<div id="toggle">
						<div class="one"></div>
						<div class="two"></div>
						<div class="three"></div>
					</div>

					<div id="menu">
						<ul class="nav navbar-nav">
							<li>
								<a href="#home">Home</a>
							</li>
							<li>
								<a href="#info">Info</a>
							</li>
							<li>
								<a href="#me-site">Me Site</a>
							</li>
							<li>
								<a href="#me-jobs">Me jobs</a>
							</li>
							<li>
								<a href="#contact-me">Contact Me</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

		</section>

	</header>


	<div class="container">
		<section id="info">
			<h4>I am a developer</h4>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis delectus molestias magnam, minus illum reiciendis
				fugit cupiditate nihil fuga asperiores cum quaerat provident minima eum quam. Laudantium sint illo voluptatem! Lorem
				ipsum dolor sit amet consectetur adipisicing elit. Blanditiis delectus molestias magnam, minus illum reiciendis fugit
				cupiditate nihil fuga asperiores cum quaerat provident minima eum quam. Laudantium sint illo voluptatem!
			</p>
		</section>

		<section>
			<div class="skills">

				<div class="row">
					<h1>My Skills.</h1>

					<div class="col">
						<div class="col-md-4">
							<h4>HTML</h4>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%; ">
									<span class="sr-only">60% Complete</span>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<h4>CSS</h4>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
									<span class="sr-only">60% Complete</span>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<h4>JavaScript</h4>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
									<span class="sr-only">60% Complete</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="col-md-4">
							<h4>Laravel</h4>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 20%; ">
									<span class="sr-only">20% Complete</span>
								</div>
							</div>
						</div>	
					</div>					
				</div>

			</div>
		</section>

		<section id="me-site">

			<div class="row">
				<h1>My Produce Template.</h1>
				<div class="col-md-3">
					<img src="{{url('img/theme1.jpg')}}" alt=" ">
				</div>
				<div class="col-md-3">
					<img src="{{url('img/theme2.jpg')}}" alt=" ">
				</div>
				<div class="col-md-3">
					<img src="{{url('img/theme3.jpg')}}" alt=" ">
				</div>
				<div class="col-md-3">
					<img src="{{url('img/theme4.jpg')}}" alt=" ">
				</div>
			</div>

		</section>

		<section id="me-jobs">

			<div class="row">
				<h1>My Recent Works.</h1>
				<div class="col-md-3">
					<img src="{{url('img/theme5.jpg')}}" alt=" ">
				</div>
				<div class="col-md-3">
					<img src="{{url('img/theme6.jpg')}}" alt=" ">
				</div>
				<div class="col-md-3">
					<img src="{{url('img/theme7.jpg')}}" alt=" ">
				</div>
				<div class="col-md-3">
					<img src="{{url('img/theme8.jpg')}}" alt=" ">
				</div>
			</div>
		</section>
		<section>
			<div id="numeri">
				<div class="row">
					<div class="col-md-3">
						<p>0</p>
						<h4>COMPLETE PROJECT</h4>
					</div>
					<div class="col-md-3">
						<p>0</p>
						<h4>HAPPY CLIENTS</h4>
					</div>
					<div class="col-md-3">
						<p>0</p>
						<h4>ENERGY DRINK</h4>
					</div>
					<div class="col-md-3">
						<p>0</p>
						<h4>AWARDS</h4>
					</div>
				</div>
			</div>
		</section>
		<section id="contact-me">

			<h1>Contact Me...</h1>
			<div class="row mio-contatto">
				<div class="col-md-4">
					<h4>Maps</h4>
					<p>Molengeek,Bruxelles,Belgique</p>
				</div>
				<div class="col-md-4">
					<h4>Tell</h4>
					<p>+0123456789</p>
				</div>
				<div class="col-md-4">
					<h4>Mail</h4>
					<p>Zak@molengeek.com</p>
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-6">
					<input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">

				</div>
				<div class="form-group col-md-6">
					<input type="Email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				</div>

			</div>

			<div class="row ">
				<div class="form-group col-md-12">
					<textarea rows="6 " name="message" class="form-control" id="description" placeholder="Your Message" required="required "></textarea>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-12">
					<input class="btn btn-default btn-invia" type="submit" value="Submit">
				</div>
			</div>
		</section>

		<footer>
			<div class="container">
				<div class="row centra">
					<div class="col-sm-12">
						<i class="logo fa fa-facebook-official" aria-hidden="true"></i>
						<i class="logo fa fa-linkedin-square" aria-hidden="true"></i>
						<i class="logo fa fa-twitter-square" aria-hidden="true"></i>
						<i class="logo fa fa-dribbble" aria-hidden="true"></i>



					</div>
				</div>
			</div>
		</footer>
	</div>


	<script src="{{url( 'js/app.js')}} "></script>

</body>

</html>