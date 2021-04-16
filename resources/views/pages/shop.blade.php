@extends('layout', ['title' => 'Shop', 'body_class' => 'shop'])

@section('content')

    <section class="section">
        <div class="container">
            <h1>Products</h1>
            <p>Total Items - {{ $products->count() }}.</p>
            @include('inc.cards', $products)
        </div>
    </section>

@endsection
