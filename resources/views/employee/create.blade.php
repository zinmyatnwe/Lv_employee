@extends('layouts.app_master')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Employee Information</h1>
        <div class="row">
          <div class="col-md-2 ms-auto">
            <a href="{{route('employee.index')}}" class="btn btn-dark">Back</a>
          </div>
        </div>
              
            
                <form action="{{route('employee.store')}} " method="post">
                    @csrf
                
                    <div class="row">
                    <div class="col-md-6">

                        <div class="form-floating mb-3">
                            <input type="text" name="name" id="" placeholder="Your Full Name" class="form-control" value="{{old('name')}}">
                            <label for="flotingInput">Your Full Name</label>
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                                
                            @enderror
                        </div>
                     
                   
                    <input type="text" name="branch_id" id="" value="{{ auth()->user()->branch_id }}" hidden>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-dark">ADD</button>

                        </div>
                    </div>
                   
                </form>
            </div>


    

    </div>
</main>
@endsection

    


