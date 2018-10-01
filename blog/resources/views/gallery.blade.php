@extends('template')
@section('title','Gallery')

@section('navbar')
    @include('partials.navbar')
@endsection

@section('content')
   <div class="gallery col-lg-12">
			<h1>Gallery</h1>
			<div class="row">
				<figure class="col-lg-3 col-md-5 col-sm-12">
					<img src="{{asset('img/beach.jpg')}}" alt="Cactus Plant">
					<figcaption>A cactus plant</figcaption>
				</figure>

				<figure class="col-lg-3 col-md-5 col-sm-12">
					<img src="{{asset('img/arrangement.jpg')}}" alt="A flower">
					<figcaption>Flowers</figcaption>
				</figure>

				<figure class="col-lg-3 col-md-5 col-sm-12">
					<img src="{{asset('img/beach.jpg')}}" alt="A beach">
					<figcaption>A beautiful beach</figcaption>
				</figure>
				
			</div>

			<figure class="col-lg-3 col-md-5 col-sm-12">
				<img src="{{asset('img/clock.svg')}}" alt="A Clock">
				<figcaption>A Clock</figcaption>
			</figure>

			<figure class="col-lg-3 col-md-5 col-sm-12">
				<img src="{{asset('img/mobile-phone.jpg')}}" alt="A mobile phone">
				<figcaption>A Mobile Phone</figcaption>
			</figure>

			<figure class="col-lg-3 col-md-5 col-sm-12">
				<img src="{{asset('img/mobile-phone.jpg')}}" alt="A Mobile">
				<figcaption>Another Mobile</figcaption>
			</figure>
		</div>
@endsection

@section('footer')
	@include('partials.footer')
@endsection	
