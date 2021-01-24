
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('admin/assets/img/favicons/favicon.ico')}}">
    

    <title>@yield('page_title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/album/">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/assets/css/bootstrap.css')}}" rel="stylesheet">

  
    
  </head>

  <body>

    @include('backend.layouts.nav')
      
      <div style="min-height: 450px;" class="container">
      @if(session('message')!=null)
        <div class="alert alert-success">
          {{session('message')}}
        </div>
      @endif

      @if(count($errors))
        @foreach($errors->all() as $error)
        
        <div class="alert alert-danger">
          {{$error}}
        </div>
        @endforeach
      @endif

        @yield('content')

      </div>
    @include('backend.layouts.footer')