@extends('app', ['title' => 'Products', 'body_class' => 'auth-products'])

@section('content')

    <div class="section">
        <div class="container">
            <div class="table__wrap">
                <h1>Products</h1>

                <table class="table">
                    <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>

                    @foreach($products as $product)

                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->code }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>${{ $product->price }}</td>
                            <td class="btn_wrap">
                                <a href="{{ route('products.show', $product) }}" class="btn sm">Open</a>
                                <a href="{{ route('products.edit', $product) }}" class="btn sm">Edit</a>
                                <form action="{{ route('products.destroy', $product) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn sm">Destroy</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
                <a href="{{ route('products.create') }}" class="btn">Add new Product</a>
            </div>
        </div>
    </div>
@endsection
