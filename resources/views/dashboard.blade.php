@extends('landingPage')
@section('title','Dashboard')
@section('content')
   
    <h1>WELCOME</h1>


    

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sliding Action with CSS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .slider {
            width: 300px;
            height: 100vh;
            background-color: #3498db;
            position: fixed;
            top: 0;
            left: -300px; /* Initially hidden off-screen */
            transition: left 0.3s ease; /* Smooth transition */
        }
        .slider.active {
            left: 0; /* Slide into view */
        }
        .slide-toggle {
            margin: 20px;
            padding: 10px 20px;
            background-color: #2ecc71;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <button class="slide-toggle">Toggle Slide</button>

    <div class="slider">
        <h2 style="color: white; text-align: center;">Sliding Panel</h2>
        <p style="color: white; padding: 20px;">Manage Account</p>
        <form method="POST" action="" onsubmit="return confirm('Are you sure you want to delete this user?');">
            @csrf
            @method('DELETE')
            <div>
                <button type="submit" class="btn btn-danger">DELETE ACCOUNT</button>
            </div>
        </form>
    </div>

    <script>
        const slider = document.querySelector('.slider');
        const toggleBtn = document.querySelector('.slide-toggle');

        toggleBtn.addEventListener('click', () => {
            slider.classList.toggle('active');
            
            // If the panel is open, set a timeout to close it after 3 seconds (3000 ms)
            if (slider.classList.contains('active')) {
                setTimeout(() => {
                    slider.classList.remove('active');
                }, 3000); // Close after 3 seconds
            }
        });
    </script>

</body>
</html>


@endsection