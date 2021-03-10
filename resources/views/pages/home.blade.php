@extends('layout', ['title' => 'Home', 'body_class' => 'home'])

@section('content')
    <section class="intro section">
        <div class="container-full">
            <div class="intro_image" style="background-image: url({{ asset('img/hero2.jpeg') }})">
                New stones waiting for you!
            </div>
        </div>
    </section>
@endsection
