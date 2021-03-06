@extends('layout', ['title' => 'Product', 'body_class' => 'single-product'])

@section('content')

    <section class="single-product section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product__gallery">
                        <img src="{{ Storage::url($product->image) }}" class="product__img" alt="{{ $product->name }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product__desc">
                        <h1 class="product__title">{{ $product->name }}</h1>
                        <span class="product__category">{{ $product->category->name }}</span>
                        <span class="product__price">${{ $product->price }}</span>
                        @if($product->inStock())
                            <form action="{{ route('basket-add', $product) }}" method="post" class="form__add-to-card">
                                @csrf
                                <button type="submit" class="add-to-card">Add to Card</button>
                            </form>
                        @else
                            <p><b>{{ $product->name }}</b> isn't stock...</p>
                        @endif
                        <p class="product__text">{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
