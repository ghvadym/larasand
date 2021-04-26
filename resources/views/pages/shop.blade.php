@extends('layout', ['title' => 'Shop', 'body_class' => 'shop'])

@section('content')

    <section class="section">
        <div class="container">
            @include('inc.filter')
            <h1>Products</h1>
            <p>Total Items - {{ $products->count() }}.</p>
            @include('inc.cards', $products)
        </div>
        {{ $products->links() }}
    </section>

@endsection
