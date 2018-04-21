@extends('header')
@section('content')
<div class="mbr-gallery" id="detailCardModal">
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
	    			<div class="col-sm-12" style="font-size: 15px;">
		    			<div class="col-sm-3" style="padding: 25px 10px 20px 20px;">
		    				<img src="{{asset('images/landlords/t3.jpg')}}" width="70px" height="70px" style="border-radius: 50%;">
		    			</div>
		    			<div class="col-sm-9" style="padding: 30px 20px 20px 20px;">
		    				<p style="font-weight: bold;">Mivelessa Ramos</p>
		    				<p style="color: red;">(305) 773-3937</p>
		    			</div>
		    		</div>
		    		<div style="font-size: 17px; color: #1c130a;">
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