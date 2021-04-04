@extends('app', ['title' => 'Categories'])

@section('content')

    <div class="section orders">
        <div class="container">
            <div class="orders__body">
                <div class="orders__table">
                    <h1 class="orders__title">Categories</h1>

                    <table class="table">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>

                            @foreach($categories as $category)

                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->code }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('categories.index') }}" class="btn sm">Open</a>
                                        <a href="{{ route('categories.index') }}" class="btn sm">Edit</a>
                                        <form action="{{ route('categories.index') }}" method="post"
                                              onsubmit="if (confirm('Are you sure?')) {return true} else {return false} ">
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
    </div>

@endsection
