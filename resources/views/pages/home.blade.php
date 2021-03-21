@extends('layout', ['title' => 'Home', 'body_class' => 'home'])

@section('content')

    <section class="intro section">
        <div class="container-full">
            <div class="intro_image" style="background-image: url({{ asset('img/homepage_hero_image.jpg') }})">
                <div class="intro__title">
                    <h2>Summer Sale</h2>
                    <a href="{{ route('shop') }}">Shop now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="products section">
        <div class="container">
            <h1 class="products__title">Featured Products</h1>
            <div class="row products__list">
                @foreach($products as $product)

                    <div class="product__item col-md-4">
                        <a href="{{ route('category', $product->category->code) }}/{{ $product->code }}" class="product__link">
                            <img src="{{ $product->image ?? asset('img/girl_with_jewelry.jpeg') }}" class="img" alt="{{ $product->name }}">
                        </a>
                        <div class="product__desc">
                            <a href="{{ route('category', $product->category->code) }}" class="product__category">{{ $product->category->name }}</a>
                            <a href="{{ route('category', $product->category->code) }}/{{ $product->code }}" class="product__title">{{ $product->name }}</a>
                            <span class="product__price">${{ $product->price }}</span>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>

@endsection
