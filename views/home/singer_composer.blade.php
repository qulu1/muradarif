<!DOCTYPE html>
<html>
	<head>
		<title>Murad Arif Website</title>	
		<meta property="og:url" content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
		<meta property="og:type" content="music.playlists" />
		<meta property="og:title" content="Murad Arif Website" />
		<meta property="og:description" content="Welcome to Murad Arif Website" />
		<meta property="og:image" content={{ url("/images/_MG_0987.png") }} />		
		<meta name="keywords" content="Murad Arif" />
		<meta name="description" content="Murad Arif Official Website" />			
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
		<link href="/audiojs/build/mediaelementplayer.css" rel="stylesheet">
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
		<section id="singer" data-offset class="color_nav">
			<div class="singer_text">
				<h3 class="module">SINGER</h3>
				@foreach($text as $row)
					<p class="module">{!!  $row->singer_text !!}</p>
				@endforeach
				<?php echo "asdsadsa" ?>
			</div>
			<div class="songs ">
				<h3 class="module">SONGS</h3>
				<div class="container ">
					<div class="row">
					@foreach($singer as $key)
						<div class="col-md-2 padsongs">
							<div class="songs_col">
								<img src="images/{{ $key->photo }}" alt="" class="img_songs" data-img="/videos/{{  $key->music}}">
								<div class="red_div">
									<img src="/images/play.png" alt="">
								</div>
								 <p title="{{ $key->music_name }}">{{ $key->music_name }}</p> 
							</div>
						</div>	
					@endforeach											
					</div>
				</div>
				<div class="player">
					<div class="media-wrapper" style="margin-top: 1.5vw;">
						<audio id="player2" class="singer_player" preload="none" controls autoplay>
							<source src="" type="audio/mp3" class="singer_player">
						</audio>
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
		<script src="/audiojs/build/mediaelement-and-player.min.js"></script>
		<script src="/audiojs/demo/demo.js"></script>
		<script src="/js/main.js"></script>
		
	</html>