@extends('layout.master')
@section('content')
    <div class="text-right">
        <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
    </div>
    <div class="card mt-10">
        <div class="card-header">
            Product Create
        </div>
        <div class="card-body p-0">
            <form action="{{ route('products.store') }}" method="post">
                @csrf
                <div class="form-group p-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
                </div>
                <div class="form-group p-3">
                    <label for="price">Price</label>
                    <input type="number" name="price" id="price" class="form-control" placeholder="Enter Price" required>
                </div>
                <div class="form-group p-3">
                    <label for="name">Brand Name</label>
                    <input type="text" name="brand_name" id="name" class="form-control" placeholder="Enter Name" required>
                </div>
                <div class="form-group p-3">
                    <label>Description</label>
                    <textarea name="description" id="description" class="form-control" placeholder="Enter Description" required></textarea>

                </div>
                <div class="p-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
