@extends('layouts.auth_master');
@section('content')
    <form action="{{route('login.loginUser')}}" method="post">
        @csrf
        <h1>Login User</h1>
        <div class="form-group mb-3">
               <input type="text" name="name" id="" class="form-control" required placeholder="Username"> 
        </div>

        <div class="form-group mb-3">
            <input type="password" name="password" id="" class="form-control" required placeholder="Password"> 
        </div>

        <button class="btn btn-primary">Login</button>

    </form>    
@endsection