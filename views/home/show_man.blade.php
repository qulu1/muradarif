<!DOCTYPE html>
<html>
	<head>
		<title>Murad Arif Website</title>
		<meta charset="UTF-8">
		<meta property="og:url" content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
		<meta property="og:type" content="music.playlists" />
		<meta property="og:title" content="Murad Arif Website" />
		<meta property="og:description" content="Welcome to Murad Arif Website" />
		<meta property="og:image" content={{ url("/images/_MG_0987.png") }} />		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="Murad Arif" />
		<meta name="description" content="Murad Arif Official Website" />			
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
	</head>
	<body>
		<div id="preloader">
			<div id="status">
			</div>
		</div>
		<div class="socialBar module">
			<div>
				<a href="https://www.facebook.com/muradarifmusic" target="_black"><i class=" fa-2x fa fa-facebook" aria-hidden="true"></i></a>
			</div>
			<div>
				<a href="https://www.instagram.com/muradarif/" target="_black"><i class="fa-2x fa fa-instagram" aria-hidden="true"></i></a>
			</div>
			<div>
				<a href="https://twitter.com/muradarif" target="_black"><i class="fa-2x fa fa-twitter" aria-hidden="true"></i></a>
			</div>
			<div>
				<a href="https://www.youtube.com/channel/UCtkPp_dFlRUdXStSU18bxDQ" target="_black"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a>
			</div>
		</div>
		<header id="header">
			<div class="header_main">
				<div class="burger">
					<img src="/images/burger.png" alt="">
				</div>
				<ul>
					<a href="/"><li class="scroll" data-section='home'>Home</li></a>
					<a href="showman"><li class="scroll" data-section='show_man'>Show man</li></a>
					<a href="singer"><li class="scroll" data-section='singer'>Singer and Composer</li></a>
					<a href="gallery"><li class="scroll" data-section='gallery'>Gallery</li></a>
					<a href="interview"><li class="scroll" data-section='interview'>Interview</li></a>
					<a href="about"><li class="scroll" data-section='about'>About me</li></a>
				</ul>
			</div>
		</header>
		<section id="show_man" data-offset class="color_nav">
			<div class="show_man_text-main">
				<h3 class="module">SHOW MAN</h3>
				@foreach($text as $key)
				<p class="module">
				{!! $key->showman_text !!}
				</p>
				@endforeach
			</div>
			<h3 class="module">VIDEOS</h3>
			<div class="container">
				<div class="row">
				@foreach($showman as $key)
					<div class="col-md-4 module ">
						<div class="video_player">
						{{-- 	<iframe  width="100%" height="100%" src="{{ $key->text }}" frameborder="0" allowfullscreen></iframe> --}}
						<iframe  width="100%" height="100%" src={{ $key->text }} frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				@endforeach	
				</div>
			</div>
		</section>
		<div class="up">
				<img src="/images/top.png">
			</div>
	</body>
	<script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.js"></script>
	<script src="/js/jquery.nicescroll.js"></script>
	<script src="/js/main.js"></script>
</html>