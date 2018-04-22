@extends('header')
@section('content')
<div class="col-xs-12 col-md-12" style="margin-top: 110px; padding: 0px !important;">
	<div class="col-md-6 col-xs-12" style="padding: 0px !important;">
		<div class="filter-options col-sm-12" style="background: #fff;">
			<div class="col-sm-4">
				<div class="dropdown" style="padding-top: 10px; padding-bottom: 10px;">
					<a id="property-menu" href="#" class="dropdown-toggle" data-toggle="dropdown">Available Properties</a><b class="caret"></b>
					<ul class="dropdown-menu">
						<li><a id="availableproperties-item" href="#">Available Properties</a></li>
						<li><a id="savedproperties-item" href="#">Saved Properties</a></li>
						<li><a href="/application">Application</a></li>
						<li><a href="/approvals">Approvals</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4 col-sm-offset-4">
				<div class="dropdown" style="padding-top: 10px; padding-bottom: 10px;">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size: 18px; padding: 5px; border: 1px solid #ddd; color: #7c807b; border-radius: 5px;">Sort: Featured <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Sort: Featured</a></li>
						<li><a href="#">Sort: Newest</a></li>
						<li><a href="#">Sort: Price (Lo-Hi)</a></li>
						<li><a href="#">Sort: Price (Hi-Lo)</a></li>
						<li><a href="#">Sort: Favorites</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="AvailableProperties">
			<ul class="show-list">
				@foreach ($estates as $estate)
				<li class="col-xs-6 col-md-4">
					<div id="detailCard" class="cardItem" data-toggle="modal" >
						<button class="favorite-btn">
							<i class="iconHeartEmpty"></i>
						</button>
						<div class="gallary-show">
							<!-- window.open('/detail?ID={{$estate->id}}', '_blank') -->
							<!-- <a href="#detailCardModal" data-toggle="modal" onclick="javascript:detailView({{$estate->id}})" style="display:inline-block;"> -->
							@if(gettype(json_decode($estate->Photos)->Photo) == "array")
							<img id="img{{$estate->id}}" data-id="{{$estate->id}}" class="img-grid" src="{{(json_decode($estate->Photos)->Photo[0]->MediaURL)}}"/>
							@else
							<img id="img{{$estate->id}}" data-id="{{$estate->id}}" class="img-grid" src="{{(json_decode($estate->Photos)->Photo->MediaURL)}}" />
							@endif
							<!-- </a> -->
							<ul>
								<li>
									<span class="petFriendly">PET FRIENDLY</span>
								</li>
							</ul>
						</div>
						<div class="backgroundBasic" style="z-index: 3;">
							<div class="cardDetails">
								<div class="rental-price">
									<span>$ {{$estate->ListPrice}}</span>
								</div>
								<div class="housedetail">
									<ul class="">
										<li>
											<i class="iconBed"></i>
											{{$estate->Bedrooms}} bd
										</li>
										<li>
											<i class="iconBath"></i>
											{{$estate->Bathrooms}} ba
										</li>
										<li>
											{{$estate->LivingArea}} sqft
										</li>
									</ul>
								</div>
								<div class="addressDetail">
									<div class="addressline1">
										{{json_decode($estate->Address, true)["commons:FullStreetAddress"]}}
									</div>
									<div class="addressline2">
										<div class="" data-reactid="84">
											{{json_decode($estate->Address, true)["commons:City"]}}, {{json_decode($estate->Address, true)["commons:StateOrProvince"]}}, {{json_decode($estate->Address, true)["commons:Country"]}}
										</div>
									</div>
								</div>
								<div class="cardfooter">
									<button class="conditionalApproval" type="button">Conditional Approval</button>
								</div>
							</div>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
			{{ $estates->links() }}
		</div>
		
	</div>
	<div class="col-md-6">
		<div class="map-column" style="position: fixed; width: 50%; height: 100%;">
			<div id="mapview" class="map-div col-xs-12"></div>
		</div>
	</div>

	
</div>
<div id="myModal" class="modal">
	<div class="modal-header">
      <span class="closeBtn">&times;</span>
      <div style="font-size: 30px; font-weight: 800; text-align: center; ">
      	  <a class="" href="#myCarousel" data-slide="prev" style="color: #ddd;">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <span  style="color: #ddd; font-size: 35px;">Favorites <span id="current_slide">0</span> of <span id="total_slides_counts">0</span></span>
		  <a class="" href="#myCarousel" data-slide="next" style="color: #ddd;">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
      </div>
    </div>
    <div class="modal-body" style="height: auto !important; background: white;">
    	<div class="galllery-detail-description col-sm-4 col-xs-12" style="border: 1px solid #1d1b23; height: 100%; padding-bottom: 30px;">
    		<div class="galllery-detail-description-header" style="background: #1d1b23; padding: 8px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
    			<h1 id='Taxes' align="center" style="color: white;">$2,100<span>/mo</span></h1>
    		</div>
    		<div class="galllery-detail-description-body" style="padding-top: 20px;">
    			<span style="font-size: 20px; padding-left: 10px; color: #098e21;">Ask about this property</span>
    		</div>

    		<div class="col-sm-12" style="font-size: 15px;">
    			<div class="col-sm-3" style="padding: 25px 10px 20px 20px;">
    				<img src="{{asset('images/landlords/t3.jpg')}}" width="70px" height="70px" style="border-radius: 50%;">
    			</div>
    			<div class="col-sm-9" style="padding: 30px 20px 20px 20px;">
    				<p id="FullName"style="font-weight: bold;">Mivelessa Ramos</p>
    				<p><span id="PrimaryContactPhone" style="color: red;">(305) 773-3937</span>, <span id="OfficePhone" style="color: red;">(305) 773-3937</span></p>
    				<!-- <p style="color: red;">(305) 773-3937</p> -->
    			</div>
    		</div>
    		<div style="font-size: 17px; color: #1c130a;" class="col-sm-12">
    			<div class="col-sm-6">
    				<p>Price: <span id='ListPrice'>$2,100</span></p>
    				<!-- <p id='price2'>Price: <span>$3,750</span></p> -->
    				<p><span id='Bedrooms'>1</span> <span>Bedroom(s)</span></p>
    				<p><span id='Bedrooms'>1</span> <span>Bathroom(s)</span></p>
    				<p id="OneQuarterBathrooms"></p>
    				<p id="PartialBathrooms"></p>
    				<p id="ThreeQuarterBathrooms"></p>
    				<p id="PropertySubType">Multi-Family</p>
    				<p>Refrigerator</p>
    				<p>Dishwasher</p>
    				<p>Microwave</p>
    				<p>Washer</p>
    			</div>
    			<div class="col-sm-6">
    				<p>Status: <span>For Rent</span></p>
    				<p>Parking: <span>Off street</span></p>
    				<p>Floors: <span>Tile</span></p>
    				<p>Pool</p>
    			</div>
    		</div>
    		<div>
    			<p style="text-align: center; font-size: 15px; color: #ca3838;">Information last upadted on <span id="ListingDate">10/25/2017</span></p>
    			<center>
    				<button type="button" style="border-radius: 7px; border: none; outline: none; background: #ddd; padding: 15px 20px 15px 20px; color: white; background: #ff7e0ce6; font-weight: 700; font-size: 18px;">
	    				<span>Make A Pre-Approved Request</span>
	    			</button>
    			</center>
    		</div>
    	</div>
    	
    	<div class="col-sm-5 col-xs-12">
    		<div class="myCarousel-header" style="padding: 10px;">
    			<p id="Address1" style="font-size: 25px; color: #d07533;">495 Brickell Ave #1608</p>
    			<span id="Address2" style="font-size: 20px; color: #f30404;">Miami, FL 33131</span>
    		</div>
    		<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol id="photo_indicators" class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div id="Photos" class="carousel-inner">
					<div class="item active">
						<img src="http://photos.listhub.net/CCIAORMA/21402153/1?lm=20140328T171615" alt="Chania">
						<div class="carousel-caption">
							<h3>Los Angeles</h3>
							<p>LA is always so much fun!</p>
						</div>
					</div>

					<div class="item">
						<img src="http://photos.listhub.net/CCIAORMA/21402153/9?lm=20140328T171615" alt="Chicago">
						<div class="carousel-caption">
							<h3>Chicago</h3>
							<p>Thank you, Chicago!</p>
						</div>
					</div>
					<div class="item">
						<img src="http://photos.listhub.net/CCIAORMA/21402153/17?lm=20140328T171615" alt="Chicago">
						<div class="carousel-caption">
							<h3>Chicago</h3>
							<p>Thank you, Chicago!</p>
						</div>
					</div>

					<div class="item">
						<img src="http://photos.listhub.net/CCIAORMA/21402153/29?lm=20140328T171615" alt="New York">
						<div class="carousel-caption">
							<h3>New York</h3>
							<p>We love the Big Apple!</p>
						</div>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
    	</div>
    	
    	<div class="myCarousel-footer col-sm-3 col-xs-12">
			<div style="padding: 10px">
				<p id='ListingTitle' style="font-size: 20px; font-weight: 700;">Icon Brickell Building</p>
				<span id='ListingDescription' style="font-size: 17px;">Beautiful 1/1 at luxurious Icon Brickell building, unit has intracoastal views. $3750 moves you in within 1-2 weeks.</span>
				<!-- <span>$3750 to move in to luxurious Icon Brickell</span> -->
				<p style=""><a href="#">Show more</a></p>
			</div>
		</div>
		<div style="clear: both;"></div>
    </div>
	<!-- Modal Content (The Image) -->
	<!-- <img class="modal-content" id="img001"> -->

	<!-- Modal Caption (Image Text) -->
	<div style="clear: both;"></div>
</div>
<style type="text/css">
	.center {
	    display: block;
	    margin-left: auto;
	    object-fit: cover;
	    margin-right: auto;
	    /*width: 90%;*/
	    height: 500px !important;
	}
</style>
<script type="text/javascript">
	var total_slides_counts = 0;
	$('.img-grid').click(function() {
		var id = $(this).data('id');
		$.ajax({
			url: "/detail",
			method: "GET",
			data: { ID: id },
			success: detailView
		});
		// var modalImg = document.getElementById("img001");
		// modalImg.src = "http://photos.listhub.net/CCIAORMA/21402153/1?lm=20140328T171615";
	});
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("closeBtn")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
	  document.getElementById('myModal').style.display = "none";
	}

	function getFormattedPhoneNumber(num) {
		return "(" + num.slice(0,3) + ") " + num.slice(3,6) + "-" + num.slice(6);
	}
	$("#myCarousel").on('slide.bs.carousel', function(evt) {
	  // console.debug("slide transition started")
	  $("#current_slide").text(($(this).find('.active').index() + 1));
	  // console.log('current slide = ', $(this).find('.active').index());
	  // console.debug('next slide = ', $(evt.relatedTarget).index())

	});

	function detailView(res) {
		$('#Taxes').text("$"+JSON.parse(res.Taxes).Tax.Amount+"/mo");
		$('#ListPrice').text("$"+res.ListPrice);
		$('#Bedrooms').text(res.Bedrooms);
		$('#Bathrooms').text(res.Bathrooms);
		$('#PropertySubType').text(res.PropertySubType);
		$('#ListingDate').text(res.ListingDate);
		// --------------------------------------
		$('#ListingTitle').text(res.ListingTitle);
		$('#ListingDescription').text(res.ListingDescription);

		console.log(JSON.parse(res.Photos).Photo);
		var photos = "";
		var indicators = "";
		for (var i = 0; i < JSON.parse(res.Photos).Photo.length; ++ i) {
			if (i == 0) {
				indicators += '<li data-target="#myCarousel" data-slide-to="' + i + '" class="active"></li>';
				photos += 	'<div class="item active">' +
							'<img class="center" src="' + JSON.parse(res.Photos).Photo[i].MediaURL +
							'" alt="New York"></div>';
			}
			else {
				indicators += '<li data-target="#myCarousel" data-slide-to="' + i + '"></li>'
				photos += 	'<div class="item">' +
							'<img class="center" src="' + JSON.parse(res.Photos).Photo[i].MediaURL +
							'" alt="New York"></div>';
			}
		}
		total_slides_counts = JSON.parse(res.Photos).Photo.length;
		document.getElementById("Photos").innerHTML = photos;
		document.getElementById("photo_indicators").innerHTML = indicators;
		$("#total_slides_counts").text(total_slides_counts);
		// --------------------------------------
		$("#FullName").text(JSON.parse(res.ListingParticipants).Participant.FirstName + " " + JSON.parse(res.ListingParticipants).Participant.LastName);
		$("#PrimaryContactPhone").text(getFormattedPhoneNumber(JSON.parse(res.ListingParticipants).Participant.PrimaryContactPhone));
		$("#OfficePhone").text(getFormattedPhoneNumber(JSON.parse(res.ListingParticipants).Participant.OfficePhone));
		$("#Address1").text(JSON.parse(res.Address)["commons:FullStreetAddress"]);
		$("#Address2").text(JSON.parse(res.Address)["commons:City"] + " " + JSON.parse(res.Address)["commons:StateOrProvince"] + " " + JSON.parse(res.Address)["commons:PostalCode"]);
		// ---------------------------------------
		$('#myModal').show();
	}
</script>
@endsection
 