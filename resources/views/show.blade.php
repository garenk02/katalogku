@extends('layouts.main')

@section('title','Detil Katalog')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">{{$katalog->judul}}</h3>
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-4">
					<img src="/images/{{$katalog->gambar}}" alt="{{$katalog->judul}}">
				</div>
				<div class="col-md-8 classified-controls">
					<h3>Deskripsi</h3>
					<p>{{$katalog->deskripsi}}</p>
					<h3>Detil Katalog</h3>
					<ul class="list-group">
						<li class="list-group-item">Harga: Rp. {{number_format($katalog->harga)}}</li>
						<li class="list-group-item">Kondisi: {{$katalog->kondisi}}</li>
					</ul>
					<h3>Penjual</h3>
					<ul class="list-group">
						<li class="list-group-item">Lokasi: {{$katalog->lokasi}}</li>
						<li class="list-group-item">Email: {{$katalog->email}}</li>
						<li class="list-group-item">Telpon: {{$katalog->telpon}}</li>
					</ul>
					@if(!Auth::guest())
						@if(Auth::user()->id==$katalog->pemilik_id)
					<div class="pull-right classified-controls">
						<a href="/katalog/{{$katalog->id}}/edit" class="btn btn-default"> Ubah </a>
					</div>
					{!! Form::open(['action' => ['KatalogController@destroy', $katalog->id], 'method' => 'DELETE']) !!}
						{!! Form::submit('Hapus ?', $attribute = ['class' => 'btn btn-danger']) !!}
					{!! Form::close() !!}
						@endif
					@endif
				</div>
			</div>
		</div>
	</div>
@stop