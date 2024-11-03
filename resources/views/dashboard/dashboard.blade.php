<!--/dashboard-->
@extends('dashboard.dashboardLanding')
@section('title', 'Dashboard')
@section('content')




<html lang="en">


<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    

<header class="contaier navbar navbar-expand-lg navbar-light " style="font-family: 'Roboto Mono', monospace; font-weight: 100;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{asset('/images/CAMBa.png')}}" width="125">
    </a>
    <div class="input-group">
        <div class="form-outline" data-mdb-input-init>
            <input type="search" id="form1" placeholder="Search"class="form-control" />
            
        </div>
        <button type="button" class="btn btn-primary" data-mdb-ripple-init>
            <i class="">&#x1F50D;</i>
        </button>
    </div>
  </div>
</header>



<div>
  <div class="row align-items-start p-2 m-2 position-relative">
    <div class="col-3 vh-100 p-2 m-2" style="background-color:#E8CAFB;">
        <div class="container p-2 mx-auto ">
            <div class="col align-items-start "> 
                <div class="col left-content position-absolute " style="background-color:#ffffff;"> <!--LEFT-->
                    <h5>IMAGE</h5>
                </div> 
                <div class="col position-absolute start-30 " style="background-color:#ffffff;"><!--RIGHT-->
                    <h6>USER NAME</h6>
                    <h7>Fullname</h7>
                </div>
            </div>
        </div>
      
    </div>
    <div class="col-6  vh-100 p-2 m-2" style="background-color:#E8CAFB;">
      Three of three columns
    </div>
    <div class="col-2 vh-100 p-2 m-2" style="background-color:#E8CAFB;">
      Three of three columns
    </div>
  </div>
</div>  


    
</body>

</html>


@endsection