<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>KatalogKu.com - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">KatalogKu.com</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Beranda</a></li>
            @if(!Auth::guest())
            <li><a href="/katalog/create">Tambah Katalog</a></li>
            @endif
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if(Auth::guest())
            <li><a href="/auth/login">Masuk</a></li>
            <li><a href="/auth/register">Daftar Baru</a></li>
            @endif
            @if(!Auth::guest())
            <li><a href="/auth/logout">Keluar</a></li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="row">
        <div class="col-md-3">
          @section('sidebar')
            {!! Form::open(['action' => 'KatalogController@search', 'method' => 'GET']) !!}
              {!! Form::text('q', null, ['class' => 'form-control', 'placeholder' => 'Cari sesuatu...']) !!}
            {!! Form::close() !!}
            <br />
            <div class="list-group">
              @foreach($kategori as $menu)
              <a href="/kategori/{{$menu->id}}" class="list-group-item">{{$menu->nama}}</a>
              @endforeach
            </div>
          @show
        </div>
        <div class="col-md-9">
          @if(Session::has('message'))
          <div class="alert alert-info">
            {{Session::get('message')}}
          </div>
          @endif
          @foreach($errors->all() as $error)
            <p class="alert alert-danger">{{$error}}</p>
          @endforeach
          @yield('content')
        </div>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
