@extends('layout', ['title' => 'Categories', 'body_class' => 'products-categories'])

@section('content')

<section class="products-categories section">
    <div class="container">
        <div class="prod-cat__list row">
            @foreach($categories as $category)

                <div class="prod-cat__item col-md-4">
                    <div class="prod-cat__body">
                        <a href="{{ route('category', $category->code) }}" class="prod-cat__img">
                            <img width="300" height="250" style="object-fit: cover" src="{{ Storage::url($category->image) }}" alt="{{ $category->name }}">
                        </a>
                        <h3 class="prod-cat__title">{{ $category->name }}</h3>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</section>

@endsection