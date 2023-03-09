@extends('layouts.app_master')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Employee Information</h1>
        <div class="row">
          <div class="col-md-4 ms-auto ">
            <a href="{{route('employee.create')}}" class="btn btn-dark">Add New Employee</a>
          </div>
        </div>
      <div class="row my-2">
        <div class="col-md-12">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($employees as $emp)
             
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$emp->name}}</td>
              
                
                <td><a href="{{route('employee.show',$emp->id)}}" class="btn btn-success mx-2">View</a>
                    <a href="{{route('employee.edit',$emp->id)}}" class="btn btn-warning mx-2">Edit</a>
                    <form action="{{route('employee.destroy',$emp->id)}}" method="post" class="d-inline">
                      @csrf
                      @method('delete')
                  <button class="btn btn-danger">Delete</button>
                </form>
                </td>
              </tr>
            
              @endforeach
            </tbody>

          </table>
        </div>

      </div>

    </div>
</main>
@endsection

    


