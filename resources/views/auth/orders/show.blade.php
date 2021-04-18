@extends('app', ['title' => 'Order ' . $order->id, 'body_class' => 'order'])

@section('content')

    <div class="section">
        <div class="container">
            <div class="table__wrap">
                <h1>Order №{{ $order->id }}</h1>
                <p>{{ $order->name }}</p>
                <p>{{ $order->phone }}</p>

                <table class="table">
                    <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Price</th>
                        <th>Count</th>
                        <th>Total Price</th>
                        <th>Time</th>
                    </tr>

                    @foreach($order->products as $product)

                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><img width="150" height="100" style="object-fit: contain" src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->phone }}</td>
                            <td>${{ $product->price }}</td>
                            {{--<td>{{ $product->productCount() }}</td>--}}
                            {{--<td>{{ $product->totalPrice() }}</td>--}}
                            {{--<td>{{ $product->created_at ?? $product->created_at->format('d/m/Y G:i') }}</td>--}}
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection