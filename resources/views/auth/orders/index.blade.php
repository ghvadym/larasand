@extends('app', ['title' => 'Orders', 'body_class' => 'orders'])

@section('content')

    <div class="section">
        <div class="container">
            <div class="table__wrap">
                <h1>Orders</h1>

                <table class="table">
                    <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Total Price</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>

                    @foreach($orders as $order)

                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->name }}</td>
                            <td>${{ $order->totalPrice() }}</td>
                            <td>{{ date('d.m.Y - G:i', strtotime($order->created_at)) }}</td>
                            <td>
                                @if(Auth::user()->isAdmin())
                                    <a href="{{ route('orders.show' , $order) }}" class="btn sm">Open</a>
                                @else
                                    <a href="{{ route('orders.user.show' , $order) }}" class="btn sm">Open</a>
                                @endif
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
                {{ $orders->links() }}
            </div>
        </div>
    </div>

@endsection
