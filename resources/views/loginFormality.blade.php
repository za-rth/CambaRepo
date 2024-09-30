@extends('landingPage')
@section('title','Login')
@section('content')
  <div class="header">
    <header class="text-center">
        <h1>LOGIN</h1>
    </header>
  </div>
    <div class="container col">
     <div class="shadow-lg p-3 mb-5 bg-white rounded col-md-4 align-items-center container-sm vw-50 container-fluid  mt-5 d-flex justify-content-center " style="width: 250px;">
        <form method="post" action="{{route('loginEnter')}}"  value="{{csrf_token()}} " style="width:">
        @csrf
        @method('POST')
        @if (session('error'))
            <script>
                alert('{{ session('error') }}');
            </script>
        @endif
            <div class="container-fluid">
              <input type="text" name="email" class="form-control" placeholder="Email" > <br>
            </div>

            <div class="container-fluid ">
              <input type="password" name="password" class="form-control" placeholder="Password" > <br>
            </div>

            <div class="container-fluid justify-content-center d-flex pb-1">
              <button type="submit" class="btn btn-primary">Login</button> <br>
            </div>    
            
            <div class="container container-fluid d-flex justify-content-center">
                <p style="font-size:10px; font-weight-bold">Don't have an account?</p>              
                <a style="font-size:9px;" href="" data-bs-toggle="modal" data-bs-target="#myModal">
                Sign Up Here
                </a>
            </div>
        </form>
      </div>
    </div>

      <div class="modal fade" id="myModal"><!--Start Div-->
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h1 class="modal-title">SIGN UP</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
      
            <!-- Modal body -->
            <div class="container-sm">
                      <form method="post" action="" style="width:300" >
                        @csrf
                        @method('post')
                      
                        <div class="mb-3">
                        <div class="form-text">We'll never share your email with anyone else.</div>
                            <input type="email" class="form-control" placeholder="Email" name="email"  aria-label="email">
                            
                        </div>
                        <div class="row">
                            <div class="mb-3 form-group col-md-6 ">
                                <input type="text" class="form-control"  name="firstname" placeholder="Firstname">
                            </div>
                            <div class="mb-3 form-group col-md-6">
                                <input type="text" class="form-control"  aria-describedby="" name="lastname" placeholder="Lastname">
                            </div>
                        </div>
                        <!---->
                        <div class="row">
                            <div class="mb-3 form-group col-md-6">
                                <input type="date" class="form-control"  aria-describedby=""  name="birthdate" placeholder="Birthdate">
                            </div>
                            <div class="mb-3 form-group col-md-6" >
                                <input type="text" class="form-control"  aria-describedby="" name="country" placeholder="Country">
                            </div>
                        </div>
                        <!---->
                        <div class="row">
                            <div class="form-group mb-3 col-md-6">
                                <input type="text" class="form-control"  aria-describedby="" name="nationality" placeholder="Nationality">
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <input type="text" class="form-control"  aria-describedby="" name="state" placeholder="State/Region">
                            </div>
                        </div>    
                        <!---->
                        <div class="row">
                            <div class="form-group mb-3 col-md-6">
                                <input type="text" class="form-control" aria-describedby="" name="zip_code" placeholder="Zipcode">
                            </div>
                            <div class="form-group mb-3 col-md-6">
                                <select type="text" name="gender" id="genderType" class="form-select" placeholder="Gender" >
                                    <option>Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Prefer not to say</option>

                                </select>
                            </div>
                        </div>    
                        <!---->
                        <div class="row">
                            <div class="mb-3 form-group mb-3 col-md-6">
                                <label class="form-label">User Type</label>
                                <br>
                                <select class="form-select" name="user_type">
                                    <option>Buyer</option>
                                    <option>Artist</option>
                                </select>
                            </div>
                            <div class="mb-3 form-group mb-3 col-md-8">
                                <div class="mb-3 form-group mb-3 col-md-8">
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                                    <span id="passwordHelpInline" class="form-text">
                                        Must be 8-20 characters long.
                                    </span>
                                </div>
                                <!--
                                <div class="mb-3 form-group mb-3 col-md-8">
                                    <label class="form-label">Re-enter Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                </div>-->
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
      
            <!-- Modal footer -->
            <div class="modal-footer container container-sm">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
      
          </div>
        </div>
      </div><!--End Div-->


<!----->



@endsection