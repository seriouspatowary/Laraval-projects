@extends('layouts.app')

@section('content')

    <section class="container mt-5">
      @if(session('success'))
      <div class="alert alert-success">{{  session('success') }}</div>
      @endif
         
      <div class="container">
           <div class="row">
 
               <div class="col-md-12">
                    <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Student Adding Application</h2>
                    </div>
                   
                    <div class="card-body">
                  

                        <!-- <button type="button" class="btn btn-primary btn-sm" >
                            <i class="fa fa-plus" aria-hidden="true"></i> create user
                        </button> -->
                        <a href="{{ url('/student/create') }}" class="btn btn-primary btn-sm" title="Add New Student">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                         </a>

 <table class="table table-borderd">
      <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Email Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $key => $val)
    <tr>
      <th scope="row">{{++$key}}</th>
      <td>{{$val->name}}</td>
      <td>{{$val->mobile}}</td>
      <td>{{$val->email}}</td>
      <td>
      <a href="{{ route('student.edit', $val->id) }}" class="btn btn-secondary"
                                                   
                                            >
        <i class="fa-solid fa-pen-to-square"></i>
     </a>


        <a href="{{ route('student.show',$val->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

                   </div>
                    
                  </div>
                </div>

            </div>
      </div>


   

    <!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://kit.fontawesome.com/18f9f7389e.js" crossorigin="anonymous"></script>


    
        
    </section>

    
    @endsection



 