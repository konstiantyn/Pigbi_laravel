@extends('app')

@section('content')

<div class="col-xs-12">
	<div class="row">
		<div class="col-xs-6">
			<div class="row">
				<div class="col-xs-4 col-md-4">
					<div class="thumbnail">
						<div class="" style="background-image: url(https://thumbs.trulia-cdn.com/pictures/thumbs_3/zillowstatic/IS2zj1qyceuubu0000000000.jpg);">
							<!-- <img src="" alt> -->
						
						<div class="caption">
							<h3>Thumbnail label</h3>
							<p>...</p>
							<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
						</div>
						</div>
					</div>
				</div>
				<div class="col-xs-4 col-md-4">
					<div class="thumbnail">
						<img src="https://thumbs.trulia-cdn.com/pictures/thumbs_3/zillowstatic/IS2zj1qyceuubu0000000000.jpg" alt>
						<div class="caption">
							<h3>Thumbnail label</h3>
							<p>...</p>
							<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
						</div>
					</div>
				</div>
				<div class="col-xs-4 col-md-4">
					<div class="thumbnail" style="">
						<img src="https://thumbs.trulia-cdn.com/pictures/thumbs_3/zillowstatic/IS2zj1qyceuubu0000000000.jpg" alt>
						<div class="caption">
							<h3>Thumbnail label</h3>
							<p>...</p>
							<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6">
			<div id="map" class="map-div" style="width: 700px; height: 400px;"></div>
			<script>
				var map;
				function initMap() {
					map = new google.maps.Map(document.getElementById('map'), { center: {lat: -34.397, lng: 150.644}, zoom: 8 });
				}
			</script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhwYRTfEwf8jBjEq6WnQV_vAKuZLieH8c&callback=initMap" async defer></script>
		</div>
	</div>
	
	
</div>
<!-- <div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
				</div>
			</div>
		</div>
	</div>
</div> -->
@endsection
