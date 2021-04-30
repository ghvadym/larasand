@extends('app', ['title' => 'Order ' . $order->id, 'body_class' => 'order'])

@section('content')

    <div class="section">
        <div class="container">
            <div class="table__wrap">
                <h1>Order №{{ $order->id }}</h1>
                <div class="table__head">
                    <div>Name: {{ $order->name }}</div>
                    <div>Phone: {{ $order->phone }}</div>
                </div>

                <table class="table">
                    <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Price</th>
                        <th>Count</th>
                        <th>Total</th>
                        <th>Time</th>
                    </tr>

                    @foreach($products as $product)

                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><img width="100" height="100" src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>${{ $product->price }}</td>
                            <td>{{ $product->pivot->count }}</td>
                            <td>${{ $product->productCount() }}</td>
                            <td>{{ $order->created_at->format('d/m/Y G:i') }}</td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>

                <div class="table__bottom">Total price: ${{ $order->totalPrice() }}</div>
            </div>
        </div>
    </div>

@endsection
