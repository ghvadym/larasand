@extends('layout', ['title' => 'Home', 'body_class' => 'home'])

@section('content')

    <section class="intro section">
        <div class="container-full">
            <div class="intro_image" style="background-image: url({{ asset('img/homepage_hero_image.jpg') }})">
                <div class="intro__title">
                    <h2>Summer Sale</h2>
                    <a href="/">Shop now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="products section">
        <div class="container">
            <h1 class="products__title">Featured Products</h1>
            <div class="row products__list">
                <div class="product__item col-md-4">
                    <a href="/" class="product__link">
                        <img src="{{ asset('img/girl_with_jewelry.jpeg') }}" class="img" alt="/">
                    </a>
                    <div class="product__desc">
                        <a href="/" class="product__category">Rings</a>
                        <h3 class="product__title">Kristen #345</h3>
                        <span class="product__price">$50</span>
                    </div>
                </div>
                <div class="product__item col-md-4">
                    <a href="/" class="product__link">
                        <img src="{{ asset('img/girl_with_jewelry.jpeg') }}" class="img" alt="/">
                    </a>
                    <div class="product__desc">
                        <a href="/" class="product__category">Rings</a>
                        <h3 class="product__title">Kristen #345</h3>
                        <span class="product__price">$50</span>
                    </div>
                </div>
                <div class="product__item col-md-4">
                    <a href="/" class="product__link">
                        <img src="{{ asset('img/girl_with_jewelry.jpeg') }}" class="img" alt="/">
                    </a>
                    <div class="product__desc">
                        <a href="/" class="product__category">Rings</a>
                        <h3 class="product__title">Kristen #345</h3>
                        <span class="product__price">$50</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
