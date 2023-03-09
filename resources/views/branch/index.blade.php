@extends('layouts.app_master')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Branch Information</h1>
        <div class="row">
          <div class="col-md-4 ms-auto ">
            <a href="{{route('branch.create')}}" class="btn btn-dark">Add New Branch</a>
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
              @foreach ($branches as $branch)
             
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$branch->branch_name}}</td>
              
                
                <td>
                    @can('isAdmin')
                    <a href="{{route('branch.show',$branch->id)}}" class="btn btn-success mx-2">View</a>
                    <a href="{{route('branch.edit',$branch->id)}}" class="btn btn-warning mx-2">Edit</a>
                    <form action="{{route('branch.destroy',$branch->id)}}" method="post" class="d-inline">
                      @csrf
                      @method('delete')
                  <button class="btn btn-danger">Delete</button>
                </form>
                @else 
                <a href="{{route('branch.show',$branch->id)}}" class="btn btn-success mx-2">View</a>
                    <a href="{{route('branch.edit',$branch->id)}}" class="btn btn-warning mx-2">Edit</a>
                    
                    @endcan
                   
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

    


