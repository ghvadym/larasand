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

    <section class="section">
        <div class="container">
            <h1>Featured Products</h1>
            @include('inc.cards', $products)
        </div>
    </section>

@endsection
