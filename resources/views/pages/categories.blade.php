@extends('layout', ['title' => 'Categories', 'body_class' => 'products-categories'])

@section('content')

<section class="products-categories section">
    <div class="container">
        <div class="prod-cat__list row">
            <div class="prod-cat__item col-md-4">
                <div class="prod-cat__body">
                    <a href="/rings" class="prod-cat__img">
                        <img class="img" src="{{ asset('img/homepage_hero_image.jpg') }}" alt="/">
                    </a>
                    <h3 class="prod-cat__title">rings</h3>
                </div>
            </div>
            <div class="prod-cat__item col-md-4">
                <div class="prod-cat__body">
                    <a href="/earrings" class="prod-cat__img">
                        <img class="img" src="{{ asset('img/homepage_hero_image.jpg') }}" alt="/">
                    </a>
                    <h3 class="prod-cat__title">errings</h3>
                </div>
            </div>
            <div class="prod-cat__item col-md-4">
                <div class="prod-cat__body">
                    <a href="/necklaces" class="prod-cat__img">
                        <img class="img" src="{{ asset('img/homepage_hero_image.jpg') }}" alt="/">
                    </a>
                    <h3 class="prod-cat__title">necklaces</h3>
                </div>
            </div>
            <div class="prod-cat__item col-md-4">
                <div class="prod-cat__body">
                    <a href="/bracelets" class="prod-cat__img">
                        <img class="img" src="{{ asset('img/homepage_hero_image.jpg') }}" alt="/">
                    </a>
                    <h3 class="prod-cat__title">bracelets</h3>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection