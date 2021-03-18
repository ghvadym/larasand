@extends('layout', ['title' => $category->name, 'body_class' => $category->code])

@section('content')

    <section class="products-category section">
        <div class="container">
            <h1 class="products__title">{{ $category->name }}</h1>
            <p>Total Items - {{ $category->products->count() }}.</p>
            <div class="row products__list">
                @foreach($category->products as $product)

                    <div class="product__item col-md-4">
                        <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="product__link">
                            <img src="{{ $product->image ?? asset('img/girl_with_jewelry.jpeg') }}" class="img" alt="{{ $product->name }}">
                        </a>
                        <div class="product__desc">
                            <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="product__title">{{ $product->name }}</a>
                            <span class="product__price">${{ $product->price }}</span>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>

@endsection