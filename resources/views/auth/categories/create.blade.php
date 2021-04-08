@extends('app', ['title' => 'Create category', 'body_class' => 'create-category'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data" class="form">
                    <h2>Create Category</h2>

                    @include('auth.inc.form')

                    <button type="submit" class="btn">Create category</button>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection