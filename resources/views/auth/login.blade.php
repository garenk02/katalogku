@extends('layouts.main')

@section('title', 'Login')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
	    	<h3 class="panel-title">Login Aplikasi</h3>
	  	</div>
	  	<div class="panel-body">
			<form action="/auth/login" method="post">
				{!! csrf_field() !!}
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" name="email" value="{{old('email')}}">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password">
				</div>
				<div class="form-group">
					<input type="checkbox" name="remember"> Ingat saya
				</div>
				<div>
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
			</form>
		</div>
	</div>
@stop