@extends('app', ['title' => 'Create product', 'body_class' => 'create-product'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="form">
                    <h2>Create product</h2>

                    @include('auth.inc.form')

                    <button type="submit" class="btn">Create product</button>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection