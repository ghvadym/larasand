@extends('layout', ['title' => $category->name, 'body_class' => $category->code])

@section('content')

    <section class="products-category section">
        <div class="container">
            <h1 class="products__title">{{ $category->name }}</h1>
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