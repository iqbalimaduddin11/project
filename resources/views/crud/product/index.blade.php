@extends('crud.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Product </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="products/create" title="Create a product"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/home" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>success</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->nama }}</td>
                <td>{{ $product->category_id }}</td>
                <td>{{ $product->harga }}</td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                        <a href="{{route('products.show', $product->id)}}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('products.edit', $product->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection
