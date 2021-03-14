@extends('layout', ['title' => 'Product', 'body_class' => 'single-product'])

@section('content')

    <section class="single-product section">
        <div class="container">
            <div class="row">
                <div class="product__gallery col-md-6">
                    <img src="{{ $product->image ?? asset('img/girl_with_jewelry.jpeg') }}" class="product__img" alt="{{ $product->name }}">
                </div>
                <div class="product__desc">
                    <h1 class="product__title">{{ $product->name }}</h1>
                    <span class="product__category">{{ $product->category->name }}</span>
                    <span class="product__price">${{ $product->price }}</span>
                    <p class="product__text">{{ $product->description }}</p>
                </div>
            </div>
        </div>
    </section>

@endsection
