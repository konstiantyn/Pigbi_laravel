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
							<a onclick="window.open('/detail?ID={{$estate->id}}', '_blank')" style="display:inline-block;">
								@if(gettype(json_decode($estate->Photos)->Photo) == "array")
								<img src="{{(json_decode($estate->Photos)->Photo[0]->MediaURL)}}" />
								@else
								<img src="{{(json_decode($estate->Photos)->Photo->MediaURL)}}" />
								@endif
							</a>
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
			<div id="map" class="map-div col-xs-12"></div>
		</div>    	
	</div>
</div>
@endsection
 