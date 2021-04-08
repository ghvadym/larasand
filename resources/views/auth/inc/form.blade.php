@if(Route::currentRouteName() == 'categories.create' || Route::currentRouteName() == 'categories.edit')

    <input name="code" type="text" placeholder="Code" value="{{ old('code') ?? $category->code ?? '' }}">
    <input name="name" type="text" placeholder="Name" value="{{ old('name') ?? $category->name ?? '' }}">
    <textarea name="description" cols="10" rows="3" placeholder="Description">{{ old('description') ?? $category->description ?? '' }}</textarea>
    <input name="image" type="file">

@elseif(Route::currentRouteName() == 'products.create' || Route::currentRouteName() == 'products.edit')

    <input name="code" type="text" placeholder="Code" value="{{ old('code') ?? $product->code ?? '' }}">
    <input name="name" type="text" placeholder="Name" value="{{ old('name') ?? $product->name ?? '' }}">
    <input name="price" type="text" placeholder="Price" value="{{ old('price') ?? $product->price ?? '' }}">
    <textarea name="description" cols="10" rows="3" placeholder="Description">{{ old('description') ?? $product->description ?? '' }}</textarea>
    <input name="image" type="file">

@endif
