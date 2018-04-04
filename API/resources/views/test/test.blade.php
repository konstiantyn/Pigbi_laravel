<div class="container">
    @foreach ($estates as $index => $estate)
    {{var_dump(json_decode($estate->Photos, true)["Photo"])}}
    	<!-- {{var_dump(json_decode($estate->Photos)->Photo[0]->MediaURL)}} -->
    	<!-- @foreach (json_decode($estate->Photos, true) as $photo)
    		{{var_dump($photo[0]["MediaURL"])}}
    	@endforeach -->
    @endforeach
    <!-- {{json_decode($estate->Photos, true)["Photo"][0]["MediaURL"]}} -->
</div>

{{ $estates->links() }}

