@extends('header')
@section('content')
<div id="main_content" class="col-sm-12 content" style="/*margin-top: 110px;*/ padding: 0px !important;">

	<div id="res_gallery" class="col-md-6 col-xs-12" style="padding: 0px !important;">
		<div class="filter-options" style="background: #ddd;">
			<div id="filter-option-desktop">
				<div class="col-sm-4" id="res_availab">
					<div class="dropdown" style="padding-top: 10px; margin-bottom: 10px;">
						<a id="property-menu" href="#" class="dropdown-toggle wid200" data-toggle="dropdown" style="">Available Properties <i class="iconDownOpen"></i></a>
						<ul class="dropdown-menu wid200" style="padding:0;">
							<li><a id="availableproperties-item" href="#">Available Properties</a></li>
							<li><a id="savedproperties-item" href="#">Saved Properties</a></li>
							<li><a href="/application">Application</a></li>
							<li><a href="/approvals">Approvals</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 col-sm-offset-4" id="res_sort">
					<div class="dropdown" style="padding-top: 10px; margin-bottom: 10px;">
						<a href="#" class="dropdown-toggle wid200" data-toggle="dropdown" style="">Sort: Featured <i class="iconDownOpen"></i></a>
						<ul class="dropdown-menu wid200" style="padding: 0;">
							<li><a href="#">Sort: Featured</a></li>
							<li><a href="/newest">Sort: Newest</a></li>
							<li><a href="/lohi_sort">Sort: Price (Lo-Hi)</a></li>
							<li><a href="/hilo_sort">Sort: Price (Hi-Lo)</a></li>
							<li><a href="#">Sort: Favorites</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div id='filter-option-mobile'>
				<div class="row" style="margin: 0 1px;">
					<div class="col-sm-10 col-xs-10 nopadding">
						<form action="/search" role="search" method="POST">
							<div class="row" style="margin: 0 1px;">
								<div class="col-xs-10 nopadding">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" id="statnewname" name="Address" class="form-control" placeholder="Search">
								</div>
								<div class="col-xs-2 nopadding">
									<button type="submit" class="btn btn-default">
										<i class="iconSearch"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-sm-2 col-xs-2 nopadding">
						<button class="btn btn-default" id="filter_mobile_btn">Filters</button>
						<button class="btn btn-default" id="filter_mobile_btn_close">Close</button>
					</div>
				</div>
				<div id="filter_mobile_option">
					<div class="row filter-item">
						<div class="col-sm-12 col-xs-12 nopadding">
							<select>
								<option><a href="#">Sort: Featured</a></option>
								<option><a href="/newest">Sort: Newest</a></option>
								<option><a href="/lohi_sort">Sort: Price (Lo-Hi)</a></option>
								<option><a href="/hilo_sort">Sort: Price (Hi-Lo)</a></option>
								<option><a href="#">Sort: Favorites</a></option>
							</select>
							<i class="iconDownOpen"></i>
						</div>
					</div>
					<div class="row filter-item">
						<p>PRICE</p>
						<div class="col-sm-5 col-xs-5 nopadding">
							<select>
								<option value="0">No Min</option><option value="10000">$10k</option><option value="20000">$20k</option><option value="30000">$30k</option><option value="50000">$50k</option><option value="100000">$100k</option><option value="130000">$130k</option><option value="150000">$150k</option><option value="200000">$200k</option><option value="250000">$250k</option><option value="300000">$300k</option><option value="350000">$350k</option><option value="400000">$400k</option><option value="450000">$450k</option><option value="500000">$500k</option><option value="550000">$550k</option><option value="600000">$600k</option><option value="650000">$650k</option><option value="700000">$700k</option><option value="750000">$750k</option><option value="800000">$800k</option><option value="850000">$850k</option><option value="900000">$900k</option><option value="950000">$950k</option><option value="1000000">$1m</option><option value="1100000">$1.1m</option><option value="1200000">$1.2m</option><option value="1250000">$1.25m</option><option value="1400000">$1.4m</option><option value="1500000">$1.5m</option><option value="1600000">$1.6m</option><option value="1700000">$1.7m</option><option value="1750000">$1.75m</option><option value="1800000">$1.8m</option><option value="1900000">$1.9m</option><option value="2000000">$2m</option><option value="2250000">$2.25m</option><option value="2500000">$2.5m</option><option value="2750000">$2.75m</option><option value="3000000">$3m</option><option value="3500000">$3.5m</option><option value="4000000">$4m</option><option value="5000000">$5m</option><option value="10000000">$10m</option><option value="20000000">$20m</option><option value="" style="display: none; visibility: hidden;">Custom</option>
							</select>
							<i class="iconDownOpen"></i>
						</div>
						<div class="col-sm-2 col-xs-2 nopadding arrow-forward">–</div>
						<div class="col-sm-5 col-xs-5 nopadding">
							<select>
								<option value="*">No Max</option><option value="10000">$10k</option><option value="20000">$20k</option><option value="30000">$30k</option><option value="50000">$50k</option><option value="100000">$100k</option><option value="130000">$130k</option><option value="150000">$150k</option><option value="200000">$200k</option><option value="250000">$250k</option><option value="300000">$300k</option><option value="350000">$350k</option><option value="400000">$400k</option><option value="450000">$450k</option><option value="500000">$500k</option><option value="550000">$550k</option><option value="600000">$600k</option><option value="650000">$650k</option><option value="700000">$700k</option><option value="750000">$750k</option><option value="800000">$800k</option><option value="850000">$850k</option><option value="900000">$900k</option><option value="950000">$950k</option><option value="1000000">$1m</option><option value="1100000">$1.1m</option><option value="1200000">$1.2m</option><option value="1250000">$1.25m</option><option value="1400000">$1.4m</option><option value="1500000">$1.5m</option><option value="1600000">$1.6m</option><option value="1700000">$1.7m</option><option value="1750000">$1.75m</option><option value="1800000">$1.8m</option><option value="1900000">$1.9m</option><option value="2000000">$2m</option><option value="2250000">$2.25m</option><option value="2500000">$2.5m</option><option value="2750000">$2.75m</option><option value="3000000">$3m</option><option value="3500000">$3.5m</option><option value="4000000">$4m</option><option value="5000000">$5m</option><option value="10000000">$10m</option><option value="20000000">$20m</option><option value="" style="display: none; visibility: hidden;">Custom</option>
							</select>
							<i class="iconDownOpen"></i>
						</div>
					</div>
					<div class="row filter-item">
						<p>BEDROOMS</p>
						<div class="col-sm-5 col-xs-5 nopadding">
							<select>
								<option value="0">No Min</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
							<i class="iconDownOpen"></i>
						</div>
						<div class="col-sm-2 col-xs-2 nopadding arrow-forward">–</div>
						<div class="col-sm-5 col-xs-5 nopadding">
							<select>
								<option value="*">No Max</option>
								<option>Studio</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
							<i class="iconDownOpen"></i>
						</div>
					</div>
				</div>
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

	                $(document).ready(function() {
	                	$('#filter_mobile_btn').click(function() {
	                		$('#main_content').addClass('filter-option-mobile-expand');
	                	})
	                	$('#filter_mobile_btn_close').click(function() {
	                		$('#main_content').removeClass('filter-option-mobile-expand');
	                	})
	                })
				</script>
			</div>
		</div>
		<div id="AvailableProperties">
			<ul class="show-list">
				@foreach ($estates as $estate)
				<li class="col-xs-6 col-md-4">
					<div id="detailCard" class="cardItem" data-toggle="modal" >
						<button class="favorite-btn">
							<i id="icon{{$estate->id}}" data-id="icon{{$estate->id}}" class="iconHeartEmpty"></i>
						</button>
						<div class="gallary-show">
							<!-- window.open('/detail?ID={{$estate->id}}', '_blank') -->
							<!-- <a href="#detailCardModal" data-toggle="modal" onclick="javascript:detailView({{$estate->id}})" style="display:inline-block;"> -->
							@if(gettype(json_decode($estate->Photos)->Photo) == "array")
							<img id="img{{$estate->id}}" data-id="{{$estate->id}}" class="img-grid" src="{{(json_decode($estate->Photos)->Photo[0]->MediaURL)}}"/>
							@else
							<img id="img{{$estate->id}}" data-id="{{$estate->id}}" class="img-grid" src="{{(json_decode($estate->Photos)->Photo->MediaURL)}}" />
							@endif
							<!-- Putting Label on Images -->
							<!-- <ul>
								<li>
									<span class="petFriendly">PET FRIENDLY</span>
								</li>
								
								<li>
									<span class="petFriendly">Newly</span>
								</li>
								<li>
									<span class="petFriendly">Newly</span>
								</li>
								<li>
									<span class="petFriendly">Newly</span>
								</li>
								<li>
									<span class="petFriendly">Newly</span>
								</li>
							</ul> -->
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
            <ul class="cls_pagination">
                {{ $estates->links() }}
            </ul>
		</div>
	</div>

	<div id="res_map" class="col-md-6 col-xs-12" style="padding: 0px;">
		<div id="res_map1" class="map-column">
			<div id="mapview" class="map-div col-xs-12"></div>
		</div>
	</div>

	<div id="res_buttons" class="floatingmenu container-fluid">
		<div class="res_btngroup">
			<button onclick="savefunction()" class="btn cls_resbuttons cls_savebtn">Save</button>
			<button id="map_btn" class="btn cls_resbuttons cls_mapbtn">Map</button>
			<button id="list_btn" class="btn cls_resbuttons cls_mapbtn">List</button>
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
    				<p>Area: <span id="LivingArea"></span></p>
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
    $(document).ready(function () {
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
        $('.iconHeartEmpty').click(function(){
            console.log("Here is the click function");
            var iconid = $(this).data('id');
            var session = "{{session('favoper')}}";
            if(session !== "")
                $("#" + iconid).attr("class", "fa fa-heart");
                $("#" + iconid).css("color", "red");
            if(session == "")
                window.location.href = "url_signin";
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
          $("#current_slide").text((($(this).find('.active').index())%total_slides_counts + 1));
          // console.log('current slide = ', $(this).find('.active').index());
          // console.debug('next slide = ', $(evt.relatedTarget).index())

        });

        function detailView(res) {
            console.log(JSON.parse(res.Address));
            $('#Taxes').text("$"+JSON.parse(res.Taxes).Tax.Amount+"/mo");
            $('#ListPrice').text("$"+res.ListPrice);
            $('#Bedrooms').text(res.Bedrooms);
            $('#Bathrooms').text(res.Bathrooms);
            $('#PropertySubType').text(res.PropertySubType);
            $('#ListingDate').text(res.ListingDate);
            $('#LivingArea').text(res.LivingArea);
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

        $('.cls_mapbtn').click(function() {
            $('#main_content').toggleClass('toggle_map')
        })
    });
</script>
@endsection









 