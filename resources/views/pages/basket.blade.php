@extends('layout', ['title' => 'Basket', 'body_class' => 'basket'])

@section('content')

    <div class="basket section">
        <div class="container">
            <h1 class="basket__title">Basket</h1>
            <div class="basket__table">
                @foreach($order->products as $product)

                    <div class="table__row">
                        <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="row__title">{{ $product->name }}</a>
                        <div class="row__count">
                            <form action="{{ route('basket-remove', $product) }}" method="post" class="count__btn btn-minus">
                                @csrf
                                <button type="submit">-</button>
                            </form>
                            <form action="{{ route('basket-add', $product) }}" method="post" class="count__btn btn-plus">
                                @csrf
                                <button type="submit">+</button>
                            </form>
                        </div>
                        <div class="row__price">${{ $product->price }}</div>
                    </div>

                @endforeach
            </div>
        </div>
    </div>

@endsection