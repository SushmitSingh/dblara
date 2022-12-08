@extends('layout.master')
@section('content')
    <div class="card mt-10">
        <div class="card-header">
            <div class="text-right">
                <a href="{{ route('users.create') }}" class="btn btn-primary">Create</a>
                <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
            </div>
            <div>
                <h4> Users List </h4>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Sr.</th>
                    <th>User Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">Show</a>
                        </td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>_____</th>
                    <th>_____</th>
                    <th>_____</th>
                    <th>_____</th>
                    <th>_____</th>
                </tr>
                </tfoot>
            </table>
            <table class="table table-hover">
                <thead>
                   <tr>
                        <th>Sr.</th>
                        <th>Product Id</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">Show</a>
                        </td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <a href="{{ route('products.destroy', $product->id) }}" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>

                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>_____</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
