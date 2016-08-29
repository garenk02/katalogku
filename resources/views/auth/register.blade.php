@extends('layouts.main')

@section('title', 'Daftar')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
	    	<h3 class="panel-title">Login Aplikasi</h3>
	  	</div>
	  	<div class="panel-body">
			<form action="/auth/register" method="post">
				{!! csrf_field() !!}
				<div class="form-group">
					Nama: 
					<input type="text" name="name" value="{{old('name')}}" class="form-control">
				</div>
				<div class="form-group">
					Email: <input type="text" name="email" value="{{old('email')}}" class="form-control">
				</div>
				<div class="form-group">
					Password: <input type="password" name="password" id="password" class="form-control">
				</div>
				<div class="form-group">
					Konfirmasi Password: <input type="password" name="password_confirmation" class="form-control">
				</div>
				<div>
					<button type="submit" class="btn btn-primary">Daftar</button>
				</div>
			</form>
		</div>
	</div>
@stop