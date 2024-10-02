<!--TOOK OUT----SCRATCH-->
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
            
            <div class="row">
                <div class="mb-3 form-group col-md-6">
                    <input type="date" class="form-control"  aria-describedby=""  name="birthdate" placeholder="Birthdate">
                </div>
                <div class="mb-3 form-group col-md-6" >
                    <input type="text" class="form-control"  aria-describedby="" name="country" placeholder="Country">
                </div>
            </div>
            
            <div class="row">
                <div class="form-group mb-3 col-md-6">
                    <input type="text" class="form-control"  aria-describedby="" name="nationality" placeholder="Nationality">
                </div>
                <div class="form-group mb-3 col-md-6">
                    <input type="text" class="form-control"  aria-describedby="" name="state" placeholder="State/Region">
                </div>
            </div>    
            
            <div class="row">
                <div class="form-group mb-3 col-md-6">
                <label  class="form-label">Zip Code</label>
                    <input type="text" class="form-control" aria-describedby="" name="zip_code" placeholder="Zipcode">
                </div>
                <div class="form-group mb-3 col-md-6">
                <label  class="form-label">Gender</label>
                    <select type="text" name="gender" id="genderType" class="form-select" placeholder="Gender" >
                        
                        <option>Male</option>
                        <option>Female</option>
                        <option>Prefer not to say</option>

                    </select>
                </div>
            </div>    
          
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
                  
                    <div class="mb-3 form-group mb-3 col-md-8">
                        <label class="form-label">Re-enter Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                </div>
                
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </body>
@endsection 