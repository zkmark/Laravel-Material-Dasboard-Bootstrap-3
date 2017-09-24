@extends('layouts.app')

@section('scripts')
<!--  Google Maps Plugin  -->
<script src="https://maps.googleapis.com/maps/api/js?key=Your Api Key Work On Production"></script>

<script src="{{ asset('js/demo.js') }}"></script>
<script>
	$().ready(function(){
		demo.initGoogleMaps();
	});
</script>
@endsection

@section('content')
<div id="map"></div>
@endsection