@extends('layout', ['title' => 'Checkout', 'body_class' => 'checkout'])

@section('content')

    <section class="checkout section">
        <div class="container">
            <div class="checkout__body">
                <h2 class="checkout__title">Your order #{{ $order->id }}</h2>
                <strong class="checkout__price">Total price: ${{ $order->totalPrice() }}</strong>
                <form action="{{ route('basket-confirm') }}" method="post">
                    <h2 class="checkout__subtitle">Enter your email and name</h2>
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="phone" placeholder="Phone">
                    <button type="submit" class="btn">Submit</button>
                    @csrf
                </form>
            </div>
        </div>
    </section>

@endsection