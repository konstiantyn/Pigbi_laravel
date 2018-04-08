<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>PIGBI</title>

	<link href="css/style.css" rel="stylesheet">

    <!-- <script type="text/javascript" src="javascripts/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="js/tailored.js"></script> -->
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/')}}"> -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBibcxCybips4ljfrOE8BibQFSBVPaoKyY&libraries=places&callback=initMap" async defer></script>
	<script src="{{asset('js/marker.js')}}"></script>
</head>
<body style="background: #ddd;">
<header style="position: fixed; width: 100%; height: 100px; z-index: 100;">
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
				<li>
					<button type="submit" class="btn navbar-btn btn-white" style="padding: 3px 10px; font-size: 15px;">Sign in</button>
		            <button type="submit" class="btn navbar-btn btn-success"  style="padding: 3px 10px; font-size: 15px;">Register</button>
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
				<span class="glyphicon glyphicon-search"></span>
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
			</script>
		</form>
		<div class="sub-menu-options">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Any Price<b class="caret"></b></a>
					<ul class="dropdown-menu">
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
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">All Beds<b class="caret"></b></a>
					<ul class="dropdown-menu">
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
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pets<b class="caret"></b></a>
					<ul class="dropdown-menu">
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
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">All Rental Types<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right" style="padding-right: 20px;">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">More<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
				<li style="padding-bottom: 0; padding-top: 0;">
					<button type="submit" class="btn navbar-btn btn-success">Save Search</button>
				</li>
			</ul>	
		</div>
	</div>
</header>
@yield('content')
</body>
</html>
