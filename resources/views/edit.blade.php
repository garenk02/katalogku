@extends('layouts.main')

@section('title','Ubah Katalog')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">
	    	<h3 class="panel-title">Ubah Katalog</h3>
	  	</div>
	  	<div class="panel-body">
	    	{!! Form::open(['action' => ['KatalogController@update', $katalog->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
			
			<div class="form-group">
				{!! Form::label('judul', 'Judul/Nama') !!}
				{!! Form::text('judul', $value=$katalog->judul, $attribute = ['class' => 'form-control', 'name' => 'judul']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('kategori_id', 'Kategori') !!}
				<select name="kategori_id" class="form-control">
					<option value="">- Pilih Salah Satu -</option>
					<option value="1">Smartphone</option>
					<option value="2">Tablet</option>
					<option value="3">Laptop</option>
					<option value="4">PC Desktop</option>
				</select>
			</div>
			
			<div class="form-group">
				{!! Form::label('deskripsi', 'Deskripsi') !!}
				{!! Form::textarea('deskripsi', $value=$katalog->deskripsi, $attribute = ['class' => 'form-control', 'name' => 'deskripsi', 'style' => 'resize:none;']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('harga', 'Harga') !!}
				{!! Form::text('harga', $value=$katalog->harga, $attribute = ['class' => 'form-control', 'name' => 'harga']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('kondisi', 'Kondisi') !!}
				{!! Form::select('kondisi', array(
					'0' => '- Pilih Salah Satu -',
					'Baru' => 'Baru',
					'Bekas' => 'Bekas',
				), $katalog->kondisi, $attribute = ['class' => 'form-control', 'name' => 'kondisi']) !!}
			</div>
			
			<div class="form-group">
				{!! Form::label('gambar', 'Gambar/Foto') !!}
				{!! Form::file('gambar', $value=null, $attribute = ['class' => 'btn btn-default']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('lokasi', 'Lokasi') !!}
				{!! Form::text('lokasi', $value=$katalog->lokasi, $attribute = ['class' => 'form-control', 'name' => 'lokasi']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('email', 'Email') !!}
				{!! Form::text('email', $value=$katalog->email, $attribute = ['class' => 'form-control', 'name' => 'email']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('telpon', 'Telpon') !!}
				{!! Form::text('telpon', $value=$katalog->telpon, $attribute = ['class' => 'form-control', 'name' => 'telpon']) !!}
			</div>

			{!! Form::submit('Simpan', $attribute = ['class' => 'btn btn-primary']) !!}

			{!! Form::close() !!}
	  	</div>
	</div>
@stop