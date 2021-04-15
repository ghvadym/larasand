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
            <div class="cards__list row">
                @foreach($products as $product)

                    <div class="col-md-4">
                        <div class="card">
                            <a href="{{ route('category', $product->category->code) }}/{{ $product->code }}" class="card__img">
                                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                            </a>
                            <div class="card__info">
                                <a href="{{ route('category', $product->category->code) }}/{{ $product->code }}" class="card__name">{{ $product->name }}</a>
                                <a href="{{ route('category', $product->category->code) }}" class="card__cat">{{ $product->category->name }}</a>
                                <span class="card__price">${{ $product->price }}</span>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>

@endsection
