@extends('layout.master')
@section('content')
    <div class="text-right">
        <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
    </div>
    <div class="card mt-10">
        <div class="card-header">
           {{ $user->name.'\'s Profile' }}
        </div>
        <div class="card-body p-0">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>_____</th>
                    <th>_____</th>
                    <th>_____</th>
                    <th>_____</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <div class="card-header">
            User Details
        </div>


    </div>
@endsection
