@extends('landingPage')
@section('title', 'Dashboard')
@section('content')




<html lang="en">
<style>
    .hover-panel {
        position: relative;
        height: 100vh;
        overflow: hidden;
    }

    .hover-panel .panel-content {
        position: absolute;
        left: -100%;
        top: ;
        width: 100px;
        height: 100%;
        background-color: blue;
        /* Adjust background color as needed */
        transition: left 0.3s ease-in-out;
    }

    .hover-panel:hover .panel-content {
        left: 0;
    }
</style>

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
    <header>WELCOME</header>
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="hover-panel">
                    <div class="panel-content">
                        <div class="" style="width:100px">
                            <h2 style="color: white; text-align: center;">Sliding Panel</h2>
                            <p style="color: white; padding: 20px;">Manage Account</p>
                            <form method="DELETE" action="{{route('deleteAccount')}}"
                                onsubmit="return confirm('Are you sure you want to delete this user?');">
                                @csrf
                                @method('DELETE')
                                <div>
                                    <button type="submit" class="btn btn-danger">DELETE ACCOUNT</button>
                                </div>
                            </form>
                            
                            <div class="container">
                                <a href="{{route('dash-profile')}}"><ul>PROFILE</ul></a>
                            </div>
                            <div class="container ">
                                <a href="#"><ul>NOTIFICATIONS</ul></a>
                            </div>
                            <div class="container">
                                <a href="#"><ul>SAVED</ul></a>
                            </div>
                            <div class="container">
                                <a href="#"><ul>FOLLOWING</ul></a>
                            </div>
                            <div class="container">
                                <a href="#"><ul>PROFILE</ul></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
  
       


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


@endsection