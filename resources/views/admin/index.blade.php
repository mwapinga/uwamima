@extends('layouts.admin')

@section('content')

<div class="page-content-wrapper animated fadeInRight">
<div class="page-content">

{{--   @include('../includes/totalnum') --}}
<!-- end col-3 -->

		<div class="col-lg-3">
<!-- Start feed -->
<div class="ibox float-e-margins">
	<div class="ibox-title">
		<h5>Message</h5>
	</div>
	<div class="ibox-content collapse in" id="demo6">
		<div class="widgets-container ">
			<div class="feed-activity-list">

				@foreach ($sms as $text)

				<div class="feed-element">
					<a href="{{ URL::to('uwadmin/'.$text->id )}}" class="pull-left"> <img alt="image" class="img-circle" src="{{ asset('assets/images/user.jpg') }}"> </a>
					<div class="media-body "> <small class="pull-right text-navy">{{ $text->created_at->diffForHumans()  }}</small> <estrong>{{ $text->name?$text->name:'Anonymous' }} <br> <strong> {{ $text->email }}</strong>.
						<br>
						<small class="text-muted"></strong>{{ $text->subject?$text->subject:'No subject' }}</small>
						<br>
						<small class="text-muted"></strong>{{ str_limit($text->message,90) }}</small>
						<div class="actions"> 
							<a href="{{ URL::to('uwadmin/'.$text->id )}}" class="btn btn-xs btn-white"> View </a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
<!-- End feed -->



        </div>
      </div>

      <br><br ><br><Br><Br><br>
        @stop








