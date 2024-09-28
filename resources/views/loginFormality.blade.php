@extends('welcome')
@section('title','Login')
@section('content')
    <header class="text-center">
        <h1>LOGIN TO CAMBA</h1>
    </header>
  <div class="shadow-lg p-3 mb-5 bg-white rounded col-md-4 align-items-center container-sm vw-50 container-fluid  mt-5 d-flex justify-content-center">
        <form method="post" action="{{route('loginEnter')}}"  value="{{csrf_token()}}">
        @csrf
        @method('POST')
        @if (session('error'))
            <script>
                alert('{{ session('error') }}');
            </script>
        @endif
            <div class="container-fluid">
              <label>EMAIL</label>
              <input type="text" name="email" class="form-control" value="" > <br></div>
            <div class="container-fluid">
              <label>PASSWORD</label>
              <input type="password" name="password" class="form-control" > <br></div>
            <div class="container-fluid justify-content-center ">
              <input class ="form-control" type="submit" value="LOGIN"> <br>
            </div>          
        </form>
  </div>
@endsection