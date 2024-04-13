
@extends('layouts.app')

@section('content')
    <section class="container mt-5 mx-auto col-md-6">

      @if(session('success'))
      <div class="alert alert-success">{{  session('success') }}</div>
      @endif
     
 
              
     
        <div class="card">
        <div class="card-header">
                        <h2 class="text-center">Add new Student</h2>
                    </div>

            <div class="card-body">
                <form action="{{route('student.store')}}" method="post">
                   @csrf
                   <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control">
                      @error('name')<p class="text text-danger">{{ $message }}</p>@enderror
                   </div>
                   <div class="form-group">
                      <label>Mobile Number</label>
                      <input type="number" name="mobile" class="form-control">
                      @error('mobile')<p class="text text-danger">{{ $message }}</p>@enderror
                   </div>
                   <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control">
                      @error('email')<p class="text text-danger">{{ $message }}</p>@enderror
                   </div>
                   <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control">
                      @error('password')<p class="text text-danger">{{ $message }}</p>@enderror
                   </div>

                   <div>
                     <button type="submit" class="btn btn-primary mt-3">Save</button>
                   </div>
                </form>
            </div>


        </div>

   




        
        

    </section>

    @endsection