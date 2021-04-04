@extends('app', ['title' => 'Orders'])

@section('content')

    <div class="section orders">
        <div class="container">
                <div class="orders__body">
                    <div class="orders__table">
                        <h1 class="orders__title">Your Orders</h1>

                        <table class="table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Total Price</th>
                                <th>Time</th>
                            </tr>

                            @foreach($orders as $order)

                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>${{ $order->totalPrice() }}</td>
                                    <td>{{ $order->created_at->format('d/m/Y G:i') }}</td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>

@endsection
