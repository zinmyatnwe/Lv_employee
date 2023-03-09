@extends('layouts.app_master')
@section('content')
  <div class="bg-light text-center">
    @auth
    <h1>Dashboard</h1>
    <p>Only authentication user can access this section</p>
    @can('isAdmin')
    <button class="btn btn-success">Admin access</button>
          
      @elsecan('isManager')
      <button class="btn btn-success">Manager access</button>

      @elsecan('isBranchManager')
      <button class="btn btn-success">Branch Manager access</button>

      @else
      <button class="btn btn-success">Employee access</button>

    @endcan

@endauth

@guest
<h1>Home Page</h1>
<p>You are in home page</p>
@endguest
  </div>

@endsection