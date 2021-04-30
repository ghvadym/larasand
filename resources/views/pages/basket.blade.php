@extends('layout', ['title' => 'Basket', 'body_class' => 'basket'])

@section('content')

    <div class="basket section">
        <div class="container">
            <h1 class="basket__title">Basket</h1>
            <div class="basket__table">
                @foreach($order->products()->with('category')->get() as $product)

                    <div class="table__product">
                        <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="product__img">
                            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                        </a>
                        <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="product__title">
                            <div>{{ $product->name }}</div>
                            <span class="product__count-view">({{ $product->pivot->count }} items)</span>
                        </a>
                        <div class="product__count">
                            <form action="{{ route('basket-remove', $product) }}" method="post" class="count__btn btn-minus">
                                @csrf
                                <button type="submit">-</button>
                            </form>
                            <form action="{{ route('basket-add', $product) }}" method="post" class="count__btn btn-plus">
                                @csrf
                                <button type="submit">+</button>
                            </form>
                        </div>
                        <div class="product__price">${{ $product->price }} (Total: ${{ $product->productCount() }})</div>
                    </div>

                @endforeach

                <div class="basket__total">
                    <div class="total__checkout">
                        <a href="{{ route('basket-checkout') }}" class="btn btn-checkout">Checkout</a>
                    </div>
                    <div class="total__price">
                        Total Price: <span>${{ $order->totalPrice() }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
