@extends('app', ['title' => 'Edit category - '.$category->name, 'body_class' => 'edit-category'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <form action="{{ route('categories.update', $category) }}" method="post" enctype="multipart/form-data" class="form">
                    <h2>Edit Category "{{ $category->name }}"</h2>

                    @include('auth.inc.form', $category)

                    <button type="submit" class="btn">Edit category</button>
                    @method('PUT')
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection