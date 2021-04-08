@extends('app', ['title' => $product->name, 'body_class' => 'show'])

@section('content')
    <section class="section">
        <div class="container">
            <div class="row">
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Field</th>
                            <th>Value</th>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>{{ $product->id }}</td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{ $product->name }}</td>
                        </tr>
                        <tr>
                            <td>Code</td>
                            <td>{{ $product->code }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{ $product->description }}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td>{{ $product->img }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection