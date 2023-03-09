@extends('layouts.app_master')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        
        <div class="row">
          <div class="col-md-4 ms-auto ">
            <a href="{{route('branch.index')}}" class="btn btn-dark">Back</a>
          </div>
        </div>
     <div class="card content-center col-md-6">
      <div class="card-title">
        <h2>Branch Information</h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <span>ID::{{$branches->id}}</span><br>
          <span>Name::{{$branches->branch_name}}</span><br>
         
        </div>
      </div>
     </div>

    </div>
</main>
@endsection

    


