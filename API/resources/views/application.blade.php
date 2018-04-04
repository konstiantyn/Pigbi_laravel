@extends('header')
@section('content')
<div class="col-xs-12 col-md-12" style="margin-top: 110px; padding: 0px !important;">
	<div class="col-md-12 col-xs-12" style="padding: 0px !important;">
		<div class="filter-options col-sm-12" style="background: #fff;">
			<div class="col-sm-6">
				<div class="dropdown" style="padding-top: 10px; padding-bottom: 10px;">
					<a id="property-menu" href="#" class="dropdown-toggle" data-toggle="dropdown">Available Properties</a><b class="caret"></b>
					<ul class="dropdown-menu">
						<li><a id="availableproperties-item" href="/">Available Properties</a></li>
						<li><a id="savedproperties-item" href="/">Saved Properties</a></li>
						<li><a href="/application">Application</a></li>
						<li><a href="/approvals">Approvals</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="Application">
		<div class="col-sm-12" style="padding-top: 10px;">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div style="border: 1px solid #000; border-radius: 20px; background: #fff; padding: 15px; font-size: 18px; box-shadow: 10px 10px 10px 10px #888888;">
					<div style="padding: 20px">
						<p style="font-size: 20px;">In order to get Pre-Approved we will need to complete your tenant screening. This includes the following detials.</p>
						<p>- Credit Report and Credit Score</p>
						<p>- National Criminal History</p>
						<p>- Tenant Rental History (If available)</p>
						<p>- Sex Offender Registry</p>
					</div>
					<div style="padding: 5px 20px;">
						<p>Invited landlords will be able to view this information but will not be able to view full name. Date of Birth, or Social Security Number. These details remain private until you have both agreed to move forward with a lease.</p> <br/>
						<p>In the event that you are not Pre-Approved, conditions may be offered to you by the landlord to improve the strength of your application. If declined for Pre-Approval you will be able to offer your application to other landlords for 90 days without any additional screening charges.</p>
					</div>
					<div style="padding: 5px 20px;">
						<h3>One Time Screening Charges</h3>
						<p>$75.00 Applicants - <span style="font-size: 14px;">An applicant is anyone residing in the property used to qualify this application</span></p>
						<p>$55.00 Guarantor - <span style="font-size: 14px;">A guarantor is anyone used to qualify an application not residing in the property</span></p>
						<p>$35.00 Other - <span style="font-size: 14px;">An adult resident not qualifying this application(Only criminal and sex offender screened)</span></p>
						<center>
							<div style="padding: 10px 20px;">
								<input type="checkbox" name="">
								<span>I understand the terms of this service as described above.</span>
							</div>
							<div style="padding: 10px 20px;">
								<button id="completeApplication" style="color: #079023;outline: none; border: 1px solid #079023; padding: 10px 30px; border-radius: 30px; background: #fff;">Complete Application</button>
							</div>
						</center>
					</div>				
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</div>
<div class="mbr-gallery modal fade" id="detailCardModal" role="dialog">
	<div class="modal-dialog modal-lg" style=" width: 70%;">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal">
	      	<i class="glyphicon glyphicon-remove"></i>
	      </button>
	      <div style="font-size: 30px; font-weight: 800; text-align: center; ">
	      	  <a class="" href="#myCarousel" data-slide="prev" style="color: #ddd;">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <span  style="color: #ddd; font-size: 35px;">Favorites 0 of 3</span>
			  <a class="" href="#myCarousel" data-slide="next" style="color: #ddd;">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
	      </div>
	    </div>
	    <div class="modal-body" style="height: 800px !important;">
	    	<div class="galllery-detail-description col-sm-4 col-xs-12" style="border: 1px solid #1d1b23; height: 100%;">
	    		<div class="galllery-detail-description-header" style="background: #1d1b23; padding: 8px; border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;">
	    			<h1 align="center" style="color: white;">$2,100/mo</h1>
	    		</div>
	    		<div class="galllery-detail-description-body" style="padding-top: 20px;">
	    			<span style="font-size: 20px; padding-left: 10px; color: #098e21;">Ask about this property</span>
	    		</div>
	    		<div class="col-sm-12" style="font-size: 15px;">
	    			<div class="col-sm-3" style="padding: 25px 10px 20px 20px;">
	    				<img src="{{asset('images/landlords/t3.jpg')}}" width="70px" height="70px" style="border-radius: 50%;">
	    			</div>
	    			<div class="col-sm-9" style="padding: 30px 20px 20px 20px;">
	    				<p style="font-weight: bold;">Mivelessa Ramos</p>
	    				<p style="color: red;">(305) 773-3937</p>
	    			</div>
	    		</div>
	    		<div style="font-size: 17px; color: #1c130a;" class="col-sm-12">
	    			<div class="col-sm-6">
	    				<p>Price: <span>$2,100</span></p>
	    				<p>Price: <span>$3,750</span></p>
	    				<p>1 <span>Bedroom</span></p>
	    				<p>Multi-Family</p>
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
	    			<p style="text-align: center; font-size: 15px; color: #ca3838;">Information last upadted on 10/25/2017</p>
	    			<center>
	    				<button type="button" style="border-radius: 7px; border: none; outline: none; background: #ddd; padding: 15px 20px 15px 20px; color: white; background: #ff7e0ce6; font-weight: 700; font-size: 18px;">
		    				<span>Make A Pre-Approved Request</span>
		    			</button>
	    			</center>
	    		</div>
	    	</div>
	    	<div class="col-sm-8 col-xs-12">
	    		<div class="myCarousel-header" style="padding: 10px;">
	    			<p style="font-size: 25px; color: #d07533;">495 Brickell Ave #1608</p>
	    			<span style="font-size: 20px; color: #f30404;">Miami, FL 33131</span>
	    		</div>
	    		<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="{{asset('images/1.jpg')}}" alt="Chania">
							<div class="carousel-caption">
								<h3>Los Angeles</h3>
								<p>LA is always so much fun!</p>
							</div>
						</div>

						<div class="item">
							<img src="{{asset('images/2.jpg')}}" alt="Chicago">
							<div class="carousel-caption">
								<h3>Chicago</h3>
								<p>Thank you, Chicago!</p>
							</div>
						</div>

						<div class="item">
							<img src="{{asset('images/3.jpg')}}" alt="New York">
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
				<div class="myCarousel-footer">
					<div style="padding: 10px">
						<p style="font-size: 20px; font-weight: 700;">Icon Brickell Building</p>
		    			<span style="font-size: 17px;">Beautiful 1/1 at luxurious Icon Brickell building, unit has intracoastal views. $3750 moves you in within 1-2 weeks.</span>
		    			<span>$3750 to move in to luxurious Icon Brickell</span>
		    			<p style=""><a href="#">Show more</a></p>
					</div>
	    		</div>
	    	</div>
	    </div>
	    <!-- <div class="modal-footer">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	    </div> -->
	  </div>
	</div>
</div>
@endsection
 