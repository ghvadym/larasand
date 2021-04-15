@extends('layout', ['title' => 'Categories', 'body_class' => 'products-categories'])

@section('content')

<section class="section">
    <div class="container">
        <div class="cats__list row">
            @foreach($categories as $category)

                <div class="col-md-4">
                    <a class="cat" href="{{ route('category', $category->code) }}">
                        <img src="{{ Storage::url($category->image) }}" alt="{{ $category->name }}">
                        <h3 class="cat__name">{{ $category->name }}</h3>
                    </a>
                </div>

            @endforeach
        </div>
    </div>
</section>

@endsection