@extends('layout.master')
@section('content')
    <div class="text-right">
        <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
    </div>
    <div class="card mt-10">
        <div class="card-header">
            User Edit
        </div>
        <div class="card-body p-0">
            <form action="{{ route('users.update', $user->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="form-group p-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" value="{{ $user->name }}" required>
                </div>

                <div class="form-group

                 p-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" value="{{ $user->email }}" required>
                </div>
                <div class="form-group p-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
                </div>
                <div class="p-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
