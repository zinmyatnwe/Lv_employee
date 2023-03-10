@extends('layouts.app_master')

@section('content')
    @auth
        <h3 class="mt-3">Create Employee</h3>

        <a href="{{ route('employee.index') }}" class="btn btn-dark">Back</a>

        <div class=" w-50 mx-auto mt-3">
            <div>
                <form action="{{ route('employee.store') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Employee Name</label>
                        <input type="text" name="name" id=""
                            class="form-control @if ($errors->has('name')) border border-danger @endif"
                            placeholder="Enter Employee Name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>

                    @if (auth()->user()->role == 'Admin' || auth()->user()->role == 'Manager')
                        <div class="form-group">
                            <label for="" class="form-label">Branch Name</label>
                            <select name="branch_id" id="" class="form-control mb-3">
                                <option value="0">Choose Branch</option>
                                @foreach ($branches as $branch)
                                    <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    @else
                        <input type="text" name="branch_id" id="" value="{{ auth()->user()->branch_id }}" hidden>
                    @endif
                    <button type="submit" class="btn btn-dark">Create</button>
                </form>
            </div>
        </div>
    @endauth
@endsection
