@extends('app', ['title' => $product->name, 'body_class' => 'show'])

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
                            <td>Category</td>
                            <td>{{ $product->category->name }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{ $product->description }}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td><img width="150" height="100" src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"></td>
                        </tr>
                        <tr>
                            <td>Labels</td>
                            <td>
                                @if($product->isHit())
                                    <div class="label__hit">Hit</div>
                                @endif

                                @if($product->isNew())
                                    <div class="label__new">New</div>
                                @endif

                                @if($product->isRecommended())
                                    <div class="label__recommend">Recommended</div>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
