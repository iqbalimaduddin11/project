@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <form action="{{ route('fibonacci.index') }}" method="post">
                        @csrf
                        @method('POST')
                        <input type="text" name="number" value="">
                        <button type="submit" class="btn btn-primary">Deret Fibonacci</button>
                    </form>
                    <div class="dropdown">
                        <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        CRUD
                        </a>
                    
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('categories.index') }}">Category</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index') }}">Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
