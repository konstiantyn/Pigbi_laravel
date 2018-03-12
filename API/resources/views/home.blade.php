@extends('app')

@section('content')
<style type="text/css">
	
</style>
<div class="modal fade" id="detailCardModal" role="dialog">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal">&times;</button>
	      <h4 class="modal-title">Modal Header</h4>
	    </div>
	    <div class="modal-body">
	      
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	    </div>
	  </div>
	</div>
</div>
<div class="col-xs-12 col-md-12" style="margin-top: 110px; padding: 0px !important;">
	<div class="col-md-6 col-xs-12" style="padding: 0px !important;">
		<ul class="show-list">
			<li class="col-xs-6 col-md-4">
				<div class="cardItem" data-toggle="modal" data-target="#detailCardModal">
					<button class="favorite-btn">
						<i class="iconHeartEmpty"></i>
					</button>
					<div class="gallary-show">
						<img src="//thumbs.trulia-cdn.com/pictures/thumbs_3/zillowstatic/ISqt3snhq4xsz51000000000.jpg" alt>
						<ul>
							<li>
								<span class="petFriendly">PET FRIENDLY</span>
							</li>
						</ul>
					</div>
					<div class="backgroundBasic" style="z-index: 3;">
						<div class="cardDetails">
							<div class="rental-price">
								<span>$935,000+</span>
							</div>
							<div class="housedetail">
								<ul class="">
									<li>
										<i class="iconBed"></i>
										1 – 3bd
									</li>
									<li>
										<i class="iconBath"></i>
										1 – 2ba
									</li>
									<li>
										590 – 1,457 sqft
									</li>
								</ul>
							</div>
							<div class="addressDetail">
								<div class="addressline1">
									50 Riverside Blvd #6J
								</div>
								<div class="addressline2">
									<div class="" data-reactid="84">
										Upper West Side, New York, NY
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
			<li class="col-xs-6 col-md-4">
				<div class="cardItem">
					<button class="favorite-btn">
						<!-- <i class="iconHeartInactive"></i> -->
						<i class="iconHeartActive typeReversed"></i>
					</button>
					<div class="gallary-show">
						<img src="//thumbs.trulia-cdn.com/pictures/thumbs_3/zillowstatic/ISahrp29yiicls0000000000.jpg" alt>
						<ul>
							<li><span class="new">NEW</span></li>
							<li><span class="petFriendly">PET FRIENDLY</span></li>
						</ul>
					</div>
					<div class="backgroundBasic" style="z-index: 3;">
						<div class="cardDetails">
							<div class="rental-price">
								<span>$935,000+</span>
							</div>
							<div class="housedetail">
								<ul class="">
									<li>
										<i class="iconBed"></i>
										1 – 3bd
									</li>
									<li>
										<i class="iconBath"></i>
										1 – 2ba
									</li>
									<li>
										590 – 1,457 sqft
									</li>
								</ul>
							</div>
							<div class="addressDetail">
								<div class="addressline1">
									50 Riverside Blvd #6J
								</div>
								<div class="addressline2">
									<div class="" data-reactid="84">
										Upper West Side, New York, NY
									</div>
								</div>
							</div>
							<div class="cardfooter">
								<button class="newPending" type="button">New - Pending</button>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="col-xs-6 col-md-4">
				<div class="cardItem">
					<button class="favorite-btn">
						<!-- <i class="iconHeartInactive"></i> -->
						<i class="iconHeartActive typeReversed"></i>
					</button>
					<div class="gallary-show">
						<img src="//thumbs.trulia-cdn.com/pictures/thumbs_3/zillowstatic/ISuch2xqhvacrf1000000000.jpg" alt>
					</div>
					<div class="backgroundBasic" style="z-index: 3;">
						<div class="cardDetails">
							<div class="rental-price">
								<span>$935,000+</span>
							</div>
							<div class="housedetail">
								<ul class="">
									<li>
										<i class="iconBed"></i>
										1 – 3bd
									</li>
									<li>
										<i class="iconBath"></i>
										1 – 2ba
									</li>
									<li>
										590 – 1,457 sqft
									</li>
								</ul>
							</div>
							<div class="addressDetail">
								<div class="addressline1">
									50 Riverside Blvd #6J
								</div>
								<div class="addressline2">
									<div class="" data-reactid="84">
										Upper West Side, New York, NY
									</div>
								</div>
							</div>
							<div class="cardfooter">
								<button class="applicationApproved" type="button">Application Approved</button>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="col-xs-6 col-md-4">
				<div class="cardItem">
					<button class="favorite-btn">
						<i class="iconHeartActive"></i>
					</button>
					<div class="gallary-show">
						<img src="//thumbs.trulia-cdn.com/pictures/thumbs_3/zillowstatic/ISahjn7dgmjnt70000000000.jpg" alt>
					</div>
					<div class="backgroundBasic" style="z-index: 3;">
						<div class="cardDetails">
							<div class="rental-price">
								<span>$935,000+</span>
							</div>
							<div class="housedetail">
								<ul class="">
									<li>
										<i class="iconBed"></i>
										1 – 3bd
									</li>
									<li>
										<i class="iconBath"></i>
										1 – 2ba
									</li>
									<li>
										590 – 1,457 sqft
									</li>
								</ul>
							</div>
							<div class="addressDetail">
								<div class="addressline1">
									50 Riverside Blvd #6J
								</div>
								<div class="addressline2">
									<div class="" data-reactid="84">
										Upper West Side, New York, NY
									</div>
								</div>
							</div>
							<div class="cardfooter">
								<button class="conditionalAccepted" type="button">Conditional Accepted</button>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="col-xs-6 col-md-4">
				<div class="cardItem">
					<button class="favorite-btn">
						<!-- <i class="iconHeartInactive"></i> -->
						<i class="iconHeartEmpty typeReversed"></i>
					</button>
					<div class="gallary-show">
						<img src="//thumbs.trulia-cdn.com/pictures/thumbs_3/ps.109/d/1/5/9/picture-uh=c512e65d49fbb1bfb8ebf7f97c62498-ps=d1593038acba55cb271cc55b32287c6.jpg" alt>
					</div>
					<div class="backgroundBasic" style="z-index: 3;">
						<div class="cardDetails">
							<div class="rental-price">
								<span>$935,000+</span>
							</div>
							<div class="housedetail">
								<ul class="">
									<li>
										<i class="iconBed"></i>
										1 – 3bd
									</li>
									<li>
										<i class="iconBath"></i>
										1 – 2ba
									</li>
									<li>
										590 – 1,457 sqft
									</li>
								</ul>
							</div>
							<div class="addressDetail">
								<div class="addressline1">
									50 Riverside Blvd #6J
								</div>
								<div class="addressline2">
									<div class="" data-reactid="84">
										Upper West Side, New York, NY
									</div>
								</div>
							</div>
							<div class="cardfooter">
								<button class="newPending" type="button">New - Pending</button>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="col-xs-6 col-md-4">
				<div class="cardItem">
					<button class="favorite-btn">
						<!-- <i class="iconHeartInactive"></i> -->
						<i class="iconHeartEmpty typeReversed"></i>
					</button>
					<div class="gallary-show">
						<img src="//thumbs.trulia-cdn.com/pictures/thumbs_3/ps.109/d/1/5/9/picture-uh=c512e65d49fbb1bfb8ebf7f97c62498-ps=d1593038acba55cb271cc55b32287c6.jpg" alt>
					</div>
					<div class="backgroundBasic" style="z-index: 3;">
						<div class="cardDetails">
							<div class="rental-price">
								<span>$935,000+</span>
							</div>
							<div class="housedetail">
								<ul class="">
									<li>
										<i class="iconBed"></i>
										1 – 3bd
									</li>
									<li>
										<i class="iconBath"></i>
										1 – 2ba
									</li>
									<li>
										590 – 1,457 sqft
									</li>
								</ul>
							</div>
							<div class="addressDetail">
								<div class="addressline1">
									50 Riverside Blvd #6J
								</div>
								<div class="addressline2">
									<div class="" data-reactid="84">
										Upper West Side, New York, NY
									</div>
								</div>
							</div>
							<div class="cardfooter">
								<button class="newPending" type="button">New - Pending</button>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="col-xs-6 col-md-4">
				<div class="cardItem">
					<button class="favorite-btn">
						<i class="iconHeartActive"></i>
					</button>
					<div class="gallary-show">
						<img src="//thumbs.trulia-cdn.com/pictures/thumbs_3/ps.109/d/1/5/9/picture-uh=c512e65d49fbb1bfb8ebf7f97c62498-ps=d1593038acba55cb271cc55b32287c6.jpg" alt>
					</div>
					<div class="backgroundBasic" style="z-index: 3;">
						<div class="cardDetails">
							<div class="rental-price">
								<span>$935,000+</span>
							</div>
							<div class="housedetail">
								<ul class="">
									<li>
										<i class="iconBed"></i>
										1 – 3bd
									</li>
									<li>
										<i class="iconBath"></i>
										1 – 2ba
									</li>
									<li>
										590 – 1,457 sqft
									</li>
								</ul>
							</div>
							<div class="addressDetail">
								<div class="addressline1">
									50 Riverside Blvd #6J
								</div>
								<div class="addressline2">
									<div class="" data-reactid="84">
										Upper West Side, New York, NY
									</div>
								</div>
							</div>
							<div class="cardfooter">
								<button class="newPending" type="button">New - Pending</button>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="col-xs-6 col-md-4">
				<div class="cardItem">
					<button class="favorite-btn">
						<i class="iconHeartActive"></i>
					</button>
					<div class="gallary-show">
						<img src="//thumbs.trulia-cdn.com/pictures/thumbs_3/ps.109/d/1/5/9/picture-uh=c512e65d49fbb1bfb8ebf7f97c62498-ps=d1593038acba55cb271cc55b32287c6.jpg" alt>
					</div>
					<div class="backgroundBasic" style="z-index: 3;">
						<div class="cardDetails">
							<div class="rental-price">
								<span>$935,000+</span>
							</div>
							<div class="housedetail">
								<ul class="">
									<li>
										<i class="iconBed"></i>
										1 – 3bd
									</li>
									<li>
										<i class="iconBath"></i>
										1 – 2ba
									</li>
									<li>
										590 – 1,457 sqft
									</li>
								</ul>
							</div>
							<div class="addressDetail">
								<div class="addressline1">
									50 Riverside Blvd #6J
								</div>
								<div class="addressline2">
									<div class="" data-reactid="84">
										Upper West Side, New York, NY
									</div>
								</div>
							</div>
							<div class="cardfooter">
								<button class="approvedLeased" type="button">Approved Leased</button>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="col-xs-6 col-md-4">
				<div class="cardItem">
					<button class="favorite-btn">
						<!-- <i class="iconHeartInactive"></i> -->
						<i class="iconHeartEmpty typeReversed"></i>
					</button>
					<div class="gallary-show">
						<img src="//thumbs.trulia-cdn.com/pictures/thumbs_3/ps.109/d/1/5/9/picture-uh=c512e65d49fbb1bfb8ebf7f97c62498-ps=d1593038acba55cb271cc55b32287c6.jpg" alt>
					</div>
					<div class="backgroundBasic" style="z-index: 3;">
						<div class="cardDetails">
							<div class="rental-price">
								<span>$935,000+</span>
							</div>
							<div class="housedetail">
								<ul class="">
									<li>
										<i class="iconBed"></i>
										1 – 3bd
									</li>
									<li>
										<i class="iconBath"></i>
										1 – 2ba
									</li>
									<li>
										590 – 1,457 sqft
									</li>
								</ul>
							</div>
							<div class="addressDetail">
								<div class="addressline1">
									50 Riverside Blvd #6J
								</div>
								<div class="addressline2">
									<div class="" data-reactid="84">
										Upper West Side, New York, NY
									</div>
								</div>
							</div>
							<div class="cardfooter">
								<button class="newPending" type="button">New - Pending</button>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="col-xs-6 col-md-4">
				<div class="cardItem">
					<button class="favorite-btn">
						<!-- <i class="iconHeartInactive"></i> -->
						<i class="iconHeartEmpty typeReversed"></i>
					</button>
					<div class="gallary-show">
						<img src="//thumbs.trulia-cdn.com/pictures/thumbs_3/ps.109/d/1/5/9/picture-uh=c512e65d49fbb1bfb8ebf7f97c62498-ps=d1593038acba55cb271cc55b32287c6.jpg" alt>
					</div>
					<div class="backgroundBasic" style="z-index: 3;">
						<div class="cardDetails">
							<div class="rental-price">
								<span>$935,000+</span>
							</div>
							<div class="housedetail">
								<ul class="">
									<li>
										<i class="iconBed"></i>
										1 – 3bd
									</li>
									<li>
										<i class="iconBath"></i>
										1 – 2ba
									</li>
									<li>
										590 – 1,457 sqft
									</li>
								</ul>
							</div>
							<div class="addressDetail">
								<div class="addressline1">
									50 Riverside Blvd #6J
								</div>
								<div class="addressline2">
									<div class="" data-reactid="84">
										Upper West Side, New York, NY
									</div>
								</div>
							</div>
							<div class="cardfooter">
								<button class="newPending" type="button">New - Pending</button>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="col-xs-6 col-md-4">
				<div class="cardItem">
					<button class="favorite-btn">
						<!-- <i class="iconHeartInactive"></i> -->
						<i class="iconHeartEmpty typeReversed"></i>
					</button>
					<div class="gallary-show">
						<img src="//thumbs.trulia-cdn.com/pictures/thumbs_3/ps.109/d/1/5/9/picture-uh=c512e65d49fbb1bfb8ebf7f97c62498-ps=d1593038acba55cb271cc55b32287c6.jpg" alt>
					</div>
					<div class="backgroundBasic" style="z-index: 3;">
						<div class="cardDetails">
							<div class="rental-price">
								<span>$935,000+</span>
							</div>
							<div class="housedetail">
								<ul class="">
									<li>
										<i class="iconBed"></i>
										1 – 3bd
									</li>
									<li>
										<i class="iconBath"></i>
										1 – 2ba
									</li>
									<li>
										590 – 1,457 sqft
									</li>
								</ul>
							</div>
							<div class="addressDetail">
								<div class="addressline1">
									50 Riverside Blvd #6J
								</div>
								<div class="addressline2">
									<div class="" data-reactid="84">
										Upper West Side, New York, NY
									</div>
								</div>
							</div>
							<div class="cardfooter">
								<button class="conditionalAccepted" type="button">New - Pending</button>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li class="col-xs-6 col-md-4">
				<div class="cardItem">
					<button class="favorite-btn">
						<!-- <i class="iconHeartInactive"></i> -->
						<i class="iconHeartActive typeReversed"></i>
					</button>
					<div class="gallary-show">
						<img src="//thumbs.trulia-cdn.com/pictures/thumbs_3/ps.109/d/1/5/9/picture-uh=c512e65d49fbb1bfb8ebf7f97c62498-ps=d1593038acba55cb271cc55b32287c6.jpg" alt>
					</div>
					<div class="backgroundBasic" style="z-index: 3;">
						<div class="cardDetails">
							<div class="rental-price">
								<span>$935,000+</span>
							</div>
							<div class="housedetail">
								<ul class="">
									<li>
										<i class="iconBed"></i>
										1 – 3bd
									</li>
									<li>
										<i class="iconBath"></i>
										1 – 2ba
									</li>
									<li>
										590 – 1,457 sqft
									</li>
								</ul>
							</div>
							<div class="addressDetail">
								<div class="addressline1">
									50 Riverside Blvd #6J
								</div>
								<div class="addressline2">
									<div class="" data-reactid="84">
										Upper West Side, New York, NY
									</div>
								</div>
							</div>
							<div class="cardfooter">
								<button class="newPending" type="button">New - Pending</button>
							</div>
						</div>
					</div>
				</div>
			</li>			
		</ul>
	</div>
	<div class="col-md-6">
		<div class="map-column" style="position: fixed; width: 50%; height: 100%;">
			<div id="map" class="map-div col-xs-12"></div>
		</div>
		
		<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=initMap"></script> -->

		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDssDEyM2r6dYD-PQprIdt5Sy6cPJMzPvs&callback=initMap">
    	</script>
    	<script src="{{asset('javascripts/marker.js')}}"></script>
    	<script type="text/javascript">
    		$(".cardItem").on("click", function (e) {
    			console.log("cardItem is clicked.");
    		});
    	</script>
	</div>	
</div>
<!-- <div class="container">
	<div class="row"><div id='ISqt3snhq4xsz51000000000' >
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
 