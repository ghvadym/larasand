@extends('layout', ['title' => 'Product', 'body_class' => 'single-product'])

@section('content')

    <section class="single-product section">
        <div class="container">
            <div class="row">
                <div class="product__gallery col-md-6">
                    <img src="{{ asset('img/girl_with_jewelry.jpeg') }}" class="product__img" alt="/">
                </div>
                <div class="product__desc">
                    <h1 class="product__title">Kristen #345</h1>
                    <span class="product__category">Rings</span>
                    <span class="product__price">$50</span>
                    <p class="product__text">Description</p>
                </div>
            </div>
        </div>
    </section>

@endsection
