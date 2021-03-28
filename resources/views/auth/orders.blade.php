@extends('app')

@section('content')

    <div class="section dash">
        <div class="container">
                <div class="dash__body">
                    <div class="dash__table">
                        <div class="card-header">Your Orders</div>

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
