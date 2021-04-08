@extends('app', ['title' => 'Edit category - '.$product->name, 'body_class' => 'edit-product'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <form action="{{ route('categories.update', $product) }}" method="post" enctype="multipart/form-data" class="form">
                    <h2>Edit Product "{{ $product->name }}"</h2>

                    @include('auth.inc.form', $product)

                    <button type="submit" class="btn">Edit product</button>
                    @method('PUT')
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection