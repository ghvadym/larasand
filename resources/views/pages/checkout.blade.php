@extends('layout', ['title' => 'Checkout', 'body_class' => 'checkout'])

@section('content')

    <section class="checkout section">
        <div class="container">
            <div class="checkout__body">
                <h2 class="checkout__title">Your order #{{ $order->id }}</h2>
                <strong>Total price: ${{ $order->totalPrice() }}</strong>
                <h3 class="checkout__subtitle">Please enter your email and name</h3>
                <form action="{{ route('basket-confirm') }}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="phone" placeholder="Phone">
                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </div>
    </section>

@endsection