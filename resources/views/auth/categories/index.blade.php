@extends('app', ['title' => 'Categories', 'body_class' => 'categories'])

@section('content')

    <div class="section">
        <div class="container">
            <div class="table__wrap">
                <h1>Categories</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Code</th>
                            <th>Name</th>
                            {{--<th>Image</th>--}}
                            <th>Actions</th>
                        </tr>

                        @foreach($categories as $category)

                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->code }}</td>
                                <td>{{ $category->name }}</td>
                                {{--<td>{{ Storage::url($category->image) }}</td>--}}
                                <td class="btn_wrap">
                                    <a href="{{ route('categories.show', $category) }}" class="btn sm">Open</a>
                                    <a href="{{ route('categories.edit', $category) }}" class="btn sm">Edit</a>
                                    <form action="{{ route('categories.destroy', $category) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn sm">Destroy</button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
                <a href="{{ route('categories.create') }}" class="btn">Add new Category</a>
            </div>
        </div>
    </div>

@endsection
