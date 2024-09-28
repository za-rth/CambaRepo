@extends('welcome')
@section('title','Registration')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <body>
    <div class="container-sm container-fluid mb-5 mt-5 d-flex col-md-5 justify-content-center shadow-lg p-3 mb-5 bg-white rounded">
        
        <form method="post" action="{{route('registerAll')}}" style="width:500px" >
            @csrf
            @method('post')
            <diV class="mb-3 ">
                <h1>SIGN UP</h1>
            </diV>
            <div class="mb-3">
            <div class="form-text">We'll never share your email with anyone else.</div>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="Email Address">
                
            </div>
            <div class="row">
                <div class="mb-3 form-group col-md-6 ">
                    <input type="text" class="form-control"  aria-describedby="" name="firstname" value="Firstname">
                </div>
                <div class="mb-3 form-group col-md-6">
                    <input type="text" class="form-control"  aria-describedby="" name="lastname" value="Lastname">
                </div>
            </div>
            <!---->
            <div class="row">
                <div class="mb-3 form-group col-md-6">
                    <input type="date" class="form-control"  aria-describedby=""  name="birthdate" value="Birthdate">
                </div>
                <div class="mb-3 form-group col-md-6" >
                    <input type="text" class="form-control"  aria-describedby="" name="country" value="Country">
                </div>
            </div>
             <!---->
            <div class="row">
                <div class="form-group mb-3 col-md-6">
                    <input type="text" class="form-control"  aria-describedby="" name="nationality" value="Nationality">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <input type="text" class="form-control"  aria-describedby="" name="state" value="State/Region">
                </div>
            </div>    
             <!---->
            <div class="row">
                <div class="form-group mb-3 col-md-6">
                <label  class="form-label">Zip Code</label>
                    <input type="text" class="form-control" aria-describedby="" name="zip_code" >
                </div>
                <div class="form-group mb-3 col-md-6">
                <label  class="form-label">Gender</label>
                    <select type="text" name="gender" id="genderType" class="form-select" aria-placeholder="Gender" >
                        
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
                <div class="mb-3 form-group mb-3 col-md-6">
                    <div class="mb-3 form-group mb-3 col-md-8">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
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
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </body>
@endsection 