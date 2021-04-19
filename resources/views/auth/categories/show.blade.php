@extends('app', ['title' => $category->name, 'body_class' => 'show'])

@section('content')
    <section class="section">
        <div class="container">
            <div class="table__wrap">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Field</th>
                            <th>Value</th>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>{{ $category->id }}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{ $category->name }}</td>
                        </tr>
                        <tr>
                            <td>Code</td>
                            <td>{{ $category->code }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{ $category->description }}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td><img width="150" height="100" src="{{ Storage::url($category->image) }}" alt="{{ $category->name }}"></td>
                        </tr>
                        <tr>
                            <td>Products</td>
                            <td>{{ $category->products->count() }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
