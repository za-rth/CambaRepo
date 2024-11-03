
@section('header')
@section('header2')

<style>
  .image-container {
      position: relative;
      border: 4px solid #A021EF;
      border-radius: 0px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      max-width: 600px;
      margin: 20px auto;
    }
  .overlay-image {
      position: absolute;
      bottom: 10px;
      right: 10px;
      width: 80px;
      height: 80px;
      border: 0px ;
      border-radius: 0;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }
    .caption {
      position: absolute;
      bottom: 10px;
      right: 100px;
      color: white;
      font-family: 'Roboto Mono';
      font-weight: 'light';
      text-align: right;
      text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
    }
    .img-gall{
      background-color: #6c757d; /* Gray background */
      color: white;
      padding: 20px;
      width:100%;
      margin:0;
      
    }
</style>

<body>
<header class="contaier navbar navbar-expand-lg navbar-light bg-light" style="font-family: 'Roboto Mono', monospace; font-weight: 100;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{asset('/images/CAMBa.png')}}" width="125">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">  </ul>
      <form class="d-flex">
        <ul class="nav-item">
          <button class="btn" style="border-color:#A021EF; background:#A021EF; color: #FFFFFF; "><a class="nav-link" href="{{route('login')}}">Sign Up</a></button>
        </ul>
        <ul class="nav-item">
          <button class="btn" style="color: #A021EF;" ><a class="nav-link" href="{{route('login')}}">Login</a> </button>
        </ul>
      </form>
    </div>
  </div>
</header>
<main>
<div class="container">
    <div class="row">
      <!---1st Half-->
      <div class="col-md-6 mt-5 left-content">
        <div class="mt-5" style="font-family: 'Roboto Mono', monospace; font-weight: 100;">
          <br>  
          <div class="mt-5">
            <h1>Art Social.</h1>
          </div>
          
          <p style="font-size: 15px;font-weight:1000">Whether art is your passion or profession, you’ve come to the right place.</p>
        </div>

       <br>
        <div class="d-flex " style="font-weight: 100;">
        <button class="btn" style="border-color:#A021EF ; background:#A021EF; color: #FFFFFF; "><a class="nav-link" href="{{route('login')}}">Get A Free Account</a></button>
        <button class="btn" style=" background:#FFFFFF; color: #A021EF; "><a class="nav-link" href="{{route('login')}}">Learn More..</a></button>
        </div>
      </div>
      
      <div class="col-md-6 mt-5">
        <!---2nd Half-->
        <div class="image-container">
          <!-- Main Image -->
        <img src="{{asset('/images/a1.jpg')}}" width="100%">
        <div class="caption" style="">
            Arouse A Rose <br>
            by Roxanne Normandia Yanne <br>
            <a href="#" class="text-warning text-decoration-none">View Profile</a>
          </div> 
        <img src="{{asset('/images/a.jpg')}} " width="40" alt="Overlay Image" class="overlay-image">
      </div>
    </div>
  </div>
</main>
 

  <!--IMAGE GALLERY-->
  <!--<div class="img-gall container container-fluid d-flex p-5 navbar navbar-expand">
    <div class=" row p-5" style="vh-100"><h1>Someone</h1></div>
    <h1>hello</h1>
  </div>-->

  <footer>
  <div class="footer container-fluid">
    <div class="row wh-100 mt-5 mr-5">
      <!-- Left Section: Text Content -->
      <div class="col-md-6" style="font-family: 'Roboto Mono', monospace; font-weight: 1000;" >
        <h1 style="">Join in, It’s free.</h1>
        <h5>An Open Art Buying Platform</h5>
        <p style="font-weight: 100;">For Art lovers, collectors, companies, Filipino artists, companies, and anyone who is involved in the world in some way.</p>
        <p style="font-weight: 100;">Create your free profile and company page, start or join a group, make connections, get followers, post on your wall and much more.</p>
        <h5>Media Channel</h5>
        <p style="font-weight: 100;">Not in the market for buying or selling art? CAMBa is free for anyone who is interested in artworks and connecting with other enthusiasts.</p>
      </div>

      <!-- Right Section: Buttons and Links -->
        <div class="col-md-5 d-flex flex-column align-items-center justify-content-center">
          
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn " style="border-color:#A021EF; background:#A021EF; color: #FFFFFF; "><a class="nav-link" href="">ABOUT</a></button>
            <button class="btn btn-block " style="border-color:#A021EF; background:#A021EF; color: #FFFFFF; "><a class="nav-link" href="">TERM | CONDITION | PRIVACY</a></button>
          </div>
        
        </div>
      </div>
    </div>
  </div>  
  </footer>
</body>
@show
@endsection