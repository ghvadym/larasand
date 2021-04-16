@extends('layout', ['title' => $category->name, 'body_class' => $category->code])

@section('content')

    <section class="section">
        <div class="container">
            <h1>{{ $category->name }}</h1>
            <p>Total Items - {{ $category->products->count() }}.</p>
            <div class="cards__list row">
                @foreach($category->products as $product)

                    <div class="col-md-4">
                        <div class="card">
                            <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="card__img">
                                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                            </a>
                            <div class="card__info">
                                <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="card__name">{{ $product->name }}</a>
                                <span class="card__price">${{ $product->price }}</span>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>

@endsection
