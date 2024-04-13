@extends('layouts.app')

@section('content')

    <section class="container mt-5 mx-auto col-md-6">
      @if(session('success'))
      <div class="alert alert-success">{{  session('success') }}</div>
      @endif
        <div class="card">
        <div class="card-header">
                        <h2 class="text-center">Edit Student Details</h2>
                    </div>
            

            <div class="card-body">
                <form action="{{route('student.update',$data->id)}}" method="post">
                   @csrf
                   @method('PATCH')
                   <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" value="{{$data->name}}">
                      @error('name')<p class="text text-danger">{{ $message }}</p>@enderror
                   </div>
                 
                   <div class="form-group">
                      <label>Mobile Number</label>
                      <input type="number" name="mobile" class="form-control" value="{{$data->mobile}}">
                      @error('mobile')<p class="text text-danger">{{ $message }}</p>@enderror
                   </div>

                   <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" value="{{$data->email}}">
                      @error('email')<p class="text text-danger">{{ $message }}</p>@enderror
                   </div>

                   <div>
                     <button type="submit" class="btn btn-primary mt-3 justify-center">Save</button>
                   </div>
                </form>
            </div>
           


        </div>

        

    </section>

    @endsection