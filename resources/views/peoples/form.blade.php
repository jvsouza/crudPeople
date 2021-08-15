@extends('layouts.app')

@section('title', 'People form')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="formcard col-md-5 bg-white p-5 mt-5 rounded">

            @if( Request::is('*/edit'))
	            <div class="h1 text-center pb-4">Edit</div>
				<form action="{{ url('people/update') }}/{{ $people->username }}" method="post">
					@csrf

	                <div class="form-group">
	                    <div class="inputready position-relative"  data-toggle="tooltip" data-placement="top" title="Non-editable field">
	                    	<div class="posico"><i class="fas fa-user"></i></div>
				    		<input type="text" name="username" placeholder="Username" class="form-control  @error('username') is-invalid @enderror" value="{{$people->username}}" disabled>
				    	</div>
				  	</div>

	                <div class="form-group">
	                    <div class="inputready position-relative">
	                    	<div class="posico"><i class="fas fa-address-card"></i></div>
				    		<input type="text" name="first_name" placeholder="First name" class="form-control  @error('first_name') is-invalid @enderror" value="{{$people->first_name}}" >
				    	</div>
				  	</div>
	                <div class="form-group">
	                    <div class="inputready position-relative">
	                    	<div class="posico"><i class="fas fa-signature"></i></div>
				    		<input type="text" name="last_name" placeholder="Last name" class="form-control  @error('last_name') is-invalid @enderror"  value="{{$people->last_name}}" >
				    	</div>
				  	</div>

				  	<div class="d-flex mt-5 pb-3">
						<a href="{{ url('peoples')}}" class="w-50"><button type="button" class="btn btn-secondary w-100">Return</button></a>
						<button type="submit" class="btn btn-primary w-50">Update</button>
					</div>
				</form>

			@else
				<div class="h1 text-center pb-4">New people</div>
				<form action="{{ url('people/add') }}" method="post">
					@csrf

	                <div class="form-group">
	                    <div class="inputready position-relative">
	                    	<div class="posico"><i class="fas fa-user"></i></div>
				    		<input type="text" name="username" placeholder="Username"  class="form-control  @error('username') is-invalid @enderror" />
				    	</div>
				  	</div>

	                <div class="form-group">
	                    <div class="inputready position-relative">
	                    	<div class="posico"><i class="fas fa-address-card"></i></div>
				    		<input type="text" name="first_name" placeholder="First name"  class="form-control  @error('first_name') is-invalid @enderror" />
				    	</div>
				  	</div>
	                <div class="form-group">
	                    <div class="inputready position-relative">
	                    	<div class="posico"><i class="fas fa-signature"></i></div>
				    		<input type="text" name="last_name" placeholder="Last name" class="form-control  @error('last_name') is-invalid @enderror" />
				    	</div>
				  	</div>

				  	<div class="d-flex mt-5 pb-3">
						<a href="{{ url('peoples')}}" class="w-50"><button type="button" class="btn btn-secondary w-100">Return</button></a>
						<button type="submit" class="btn btn-primary w-50">Submit</button>
					</div>
				</form>
			@endif

        	@if ($errors -> any())
        		<div class="alert alert-danger">
        			<ul>
        				@foreach($errors->all() as $error )
        					<li>{{$error}}</li>
        				@endforeach
        			</ul>
        		</div>
        	@endif

        </div>
    </div>
</div>
@endsection
