<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>PIGBI</title>
	<link href="css/style.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script type="text/javascript">
			// console.log('adfadfadfadfad');
		var searchresult = {!! json_encode($estates) !!};
		console.log(searchresult);

		var locations = [], imageurls = [];
		for (var i = 0; i < searchresult.data.length; ++ i) {
			// console.log(JSON.parse(searchresult.data[i].Location));
			locations.push({
				la: JSON.parse(searchresult.data[i].Location).Latitude,
				lo: JSON.parse(searchresult.data[i].Location).Longitude
			});
			console.log(JSON.parse(searchresult.data[i].Photos).Photo.MediaURL);
			if (JSON.parse(searchresult.data[i].Photos).Photo.MediaURL != undefined)
				imageurls.push(JSON.parse(searchresult.data[i].Photos).Photo.MediaURL);
			else
				imageurls.push(JSON.parse(searchresult.data[i].Photos).Photo[0].MediaURL);
			// console.log(JSON.parse(searchresult.data[i].Photos));
		}
		console.log(locations);
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="{{asset('js/marker.js')}}"></script>
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBibcxCybips4ljfrOE8BibQFSBVPaoKyY&libraries=places&callback=initMap" async defer></script> -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBibcxCybips4ljfrOE8BibQFSBVPaoKyY&libraries=places&callback=initMap" async defer></script>
</head>
<body style="background: #ddd;">
<header style="/*position: fixed;*/ width: 100%; height: 100px; z-index: 100;" class="header" id="pigbi_header">	
	<nav class="navbar navbar-green" role="navigation" style="padding-right: 10px;">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-header">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar" style="background-color: white;"></span>
				<span class="icon-bar" style="background-color: white;"></span>
				<span class="icon-bar" style="background-color: white;"></span>
			</button>
			<a class="navbar-brand" href="#">PIGBI</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="main-header">
			<ul class="nav navbar-nav navbar-right">
				<li class="saved"><a href="#">Saved</a></li>
				<li class="cls_autho">
					<button onclick="gosigninfunc()" type="submit" class="btn navbar-btn btn-white" style="padding: 3px 10px; font-size: 14px; font-weight: 550;">Sign in</button>
		            <button onclick="gosignupfunc()" type="submit" class="btn navbar-btn btn-success"  style="border: none; padding: 3px 10px; font-size: 15px; font-weight: 550;">Register</button>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
	<div class="navbar" style="background: #fff;">
		<form class="navbar-form navbar-left search-line" action="/search" role="search" method="POST">
			<div class="form-group col-xs-10">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="text" id="statnewname" name="Address" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default col-xs-2">
				<i class="iconSearch"></i>
			</button>
			<script type="text/javascript">
				$('#statnewname').autocomplete({
					source : "{!!URL::route('autocomplete')!!}",
					minlenght: 1,
					autoFocus: false,
					select: function(e,ui){
						console.log(ui);
					}
				});
				$('#statnewname').keydown(function (e) {
					console.log(e);
					/*if(e.keyCode == 13) {
						location.href = "/search?" + $(this).val();
					}*/
				});

				window.onscroll=function(){setfixedheader()};var header=document.getElementById("pigbi_header");var sticky=header.offsetTop;function setfixedheader(){if(window.pageYOffset>sticky){header.classList.add("sticky");}else{header.classList.remove("sticky");}}
                
                function gosigninfunc() {
                    window.location.href = "url_signin";
                }
                
                function gosignupfunc() {
                    window.location.href = "url_signup";
                }
			</script>
		</form>
		<div class="sub-menu-options">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle wid150" data-toggle="dropdown">Any Price<i class="iconDownOpen"></i></a>
					<ul class="dropdown-menu wid150">
						<li><a href="ten_thirty">10~30K</a></li>
						<li><a href="url_thirty_firty">30~40K</a></li>
						<li><a href="url_forty_sixty">40~60K</a></li>
						<li><a href="url_sixty_hundred">60~100K</a></li>
						<li><a href="url_hundred_twentyhun">100~120K</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle wid150" data-toggle="dropdown">All Beds<i class="iconDownOpen"></i></a>
					<ul class="dropdown-menu wid150">
						<li><a href="url_onetwobed">1~2 Beds</a></li>
						<li><a href="url_twofourbed">2~4 Beds</a></li>
						<li><a href="url_foursixbed">4~6 Beds</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle wid150" data-toggle="dropdown">Pets<i class="iconDownOpen"></i></a>
					<ul class="dropdown-menu wid150">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle wid200" data-toggle="dropdown">All Rental Types<i class="iconDownOpen"></i></a>
					<ul class="dropdown-menu wid200">
						<li><a href="#">Single</a></li>
						<li><a href="#">Multi</a></li>
						<li><a href="#">Triple</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle wid150" data-toggle="dropdown">More<i class="iconDownOpen"></i></a>
					<ul class="dropdown-menu wid150">
						<li><a href="#">Air Conditioning</a></li>
						<li><a href="#">Microwave</a></li>
						<li><a href="#">Pool/Hot Tub</a></li>
						<li><a href="#">Gym</a></li>
						<li><a href="#">Dishwasher</a></li>
					</ul>
				</li>
			</ul>
			<button type="submit" class="btn navbar-btn btn-success" style="float: right; margin-right: 10px; font-weight: 550;">Save Search</button>
		</div>
	</div>
</header>
@yield('content')
</body>
</html>
