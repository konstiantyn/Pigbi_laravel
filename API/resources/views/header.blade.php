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
	<div class="navbar" id="unres_header" style="background: #fff;">
		<form id="res_searchform" class="navbar-form navbar-left search-line" action="/search" role="search" method="POST">
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
			<ul class="nav navbar-nav" id="res_filtergroup">
				<li class="dropdown-custom dropdown" id="res_anyprice">
					<a href="#" class="dropdown-toggle wid150">Any Price<i class="iconDownOpen"></i></a>
					<div class="dropdown-menu-wrap">
						<ul class="dropdown-menu-custom">
							<li>
								<select id="minPrice">
									<option value="0">No Min</option><option value="10000">$10k</option><option value="20000">$20k</option><option value="30000">$30k</option><option value="50000">$50k</option><option value="100000">$100k</option><option value="130000">$130k</option><option value="150000">$150k</option><option value="200000">$200k</option><option value="250000">$250k</option><option value="300000">$300k</option><option value="350000">$350k</option><option value="400000">$400k</option><option value="450000">$450k</option><option value="500000">$500k</option><option value="550000">$550k</option><option value="600000">$600k</option><option value="650000">$650k</option><option value="700000">$700k</option><option value="750000">$750k</option><option value="800000">$800k</option><option value="850000">$850k</option><option value="900000">$900k</option><option value="950000">$950k</option><option value="1000000">$1m</option><option value="1100000">$1.1m</option><option value="1200000">$1.2m</option><option value="1250000">$1.25m</option><option value="1400000">$1.4m</option><option value="1500000">$1.5m</option><option value="1600000">$1.6m</option><option value="1700000">$1.7m</option><option value="1750000">$1.75m</option><option value="1800000">$1.8m</option><option value="1900000">$1.9m</option><option value="2000000">$2m</option><option value="2250000">$2.25m</option><option value="2500000">$2.5m</option><option value="2750000">$2.75m</option><option value="3000000">$3m</option><option value="3500000">$3.5m</option><option value="4000000">$4m</option><option value="5000000">$5m</option><option value="10000000">$10m</option><option value="20000000">$20m</option><option value="" style="display: none; visibility: hidden;">Custom</option>
								</select>
								<i class="iconDownOpen"></i>
							</li>
							<li class="arrow-forward">–</li>
							<li>
								<select id="maxPrice">
									<option value="*">No Max</option><option value="10000">$10k</option><option value="20000">$20k</option><option value="30000">$30k</option><option value="50000">$50k</option><option value="100000">$100k</option><option value="130000">$130k</option><option value="150000">$150k</option><option value="200000">$200k</option><option value="250000">$250k</option><option value="300000">$300k</option><option value="350000">$350k</option><option value="400000">$400k</option><option value="450000">$450k</option><option value="500000">$500k</option><option value="550000">$550k</option><option value="600000">$600k</option><option value="650000">$650k</option><option value="700000">$700k</option><option value="750000">$750k</option><option value="800000">$800k</option><option value="850000">$850k</option><option value="900000">$900k</option><option value="950000">$950k</option><option value="1000000">$1m</option><option value="1100000">$1.1m</option><option value="1200000">$1.2m</option><option value="1250000">$1.25m</option><option value="1400000">$1.4m</option><option value="1500000">$1.5m</option><option value="1600000">$1.6m</option><option value="1700000">$1.7m</option><option value="1750000">$1.75m</option><option value="1800000">$1.8m</option><option value="1900000">$1.9m</option><option value="2000000">$2m</option><option value="2250000">$2.25m</option><option value="2500000">$2.5m</option><option value="2750000">$2.75m</option><option value="3000000">$3m</option><option value="3500000">$3.5m</option><option value="4000000">$4m</option><option value="5000000">$5m</option><option value="10000000">$10m</option><option value="20000000">$20m</option><option value="" style="display: none; visibility: hidden;">Custom</option>
								</select>
								<i class="iconDownOpen"></i>
							</li>
						</ul>
					</div>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle wid150" data-toggle="dropdown">All Beds<i class="iconDownOpen"></i></a>
					<ul class="dropdown-menu wid1650">
						<div class="btnGroup">
							<button class='btn btn-success btnTouch btnSecondary cls_studiobtn'>Studio</button >
							<button class="btn btn-default btnTouch ">1+</button>
							<button class="btn btn-default btnTouch ">2+</button>
							<button class="btn btn-default btnTouch ">3+</button>
							<button class="btn btn-default btnTouch ">4+</button>	
						</div>
						
						<!-- <li><a href="url_onetwobed">1~2 Beds</a></li>
						<li><a href="url_twofourbed">2~4 Beds</a></li>
						<li><a href="url_foursixbed">4~6 Beds</a></li> -->
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
			<ul class="nav navbar-nav navbar-right" id="res_more">
				<li class="dropdown" id="res_more">
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
			<button type="submit" id="res_savesearch" class="btn navbar-btn btn-success" style="float: right; margin-right: 10px; font-weight: 550;">Save Search</button>
		</div>
	</div>
</header>
@yield('content')
</body>
<script type="text/javascript">
$(document).ready(function() {
	$('.dropdown-custom a.dropdown-toggle').click(function() {
		$('.dropdown-custom').toggleClass('open');
	})
})
</script>
<style type="text/css">
div.dropdown-menu-wrap {
	position: absolute;
	display: none;
	z-index: 1;
}
.dropdown-custom.open >div.dropdown-menu-wrap {
	display: block;
}
ul.dropdown-menu-custom {
	padding: 15px 5px 10px 5px;
    border: 1px solid #e8e9ea;
    border-radius: 4px;
    background: #fff;
    overflow: hidden;
    border-top-width: 0;
    position: fixed;
}
ul.dropdown-menu-custom li {
	position: relative;
	float: left;
	min-width: 160px;
}
ul.dropdown-menu-custom li.arrow-forward {
	color: grey;
	text-align: center;
	min-width: 40px !important;
	padding-top: 10px;
}
ul.dropdown-menu-custom select {
	height: 46px!important;
	box-sizing: border-box;
    width: 100%;
    padding: .6em .8em .5em;
    border-radius: 4px;
    border: 1px solid #cdd1d4;
    line-height: 1.2;
    color: grey;
    transition: border .2s;
    -moz-appearance:none; /* Firefox */
    -webkit-appearance:none; /* Safari and Chrome */
    appearance:none;
}
ul.dropdown-menu-custom i {
	position: absolute;
	right: 10px;
	top: 10px;
	color: grey;
	z-index: 1000;
}
</style>
</html>





