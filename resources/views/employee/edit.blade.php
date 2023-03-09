@extends('layouts.app_master')

@section('content')
    @auth
        <a href="{{ route('employee.index') }}" class="btn btn-dark my-3">Back</a>

        <div class="w-50 mx-auto mt-3">
            <div class="content">
                <form action="{{ route('employee.update',$employee->id) }}" method="get">
                    @csrf
                    @method('put');
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Employee Name</label>
                        <input type="text" name="name" id=""
                            class="form-control @if ($errors->has('name')) border border-danger @endif"
                            placeholder="Enter Employee Name" value="{{ $employee->name }}">
                        @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    @endauth
@endsection
