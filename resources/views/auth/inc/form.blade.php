@if(Route::currentRouteName() == 'categories.create' || Route::currentRouteName() == 'categories.edit')

    <input name="code" type="text" placeholder="Code" value="{{ old('code') ?? $category->code ?? '' }}">
    <input name="name" type="text" placeholder="Name" value="{{ old('name') ?? $category->name ?? '' }}">
    <textarea name="description" cols="10" rows="3" placeholder="Description">{{ old('description') ?? $category->description ?? '' }}</textarea>
    <input name="image" type="file">

@elseif(Route::currentRouteName() == 'products.create' || Route::currentRouteName() == 'products.edit')

    <input name="code" type="text" placeholder="Code" value="{{ old('code') ?? $product->code ?? '' }}">
    <input name="name" type="text" placeholder="Name" value="{{ old('name') ?? $product->name ?? '' }}">
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                @isset($product)
                    @if($product->category_id == $category->id)
                        selected
                    @endif
                @endisset
            >{{ $category->name }}</option>
        @endforeach
    </select>
    <input name="price" type="text" placeholder="Price" value="{{ old('price') ?? $product->price ?? '' }}">
    <input name="count" type="text" placeholder="Count in stock" value="{{ old('count') ?? $product->count ?? '' }}">
    <textarea name="description" cols="10" rows="3" placeholder="Description">{{ old('description') ?? $product->description ?? '' }}</textarea>
    <input name="image" type="file">

    <div class="checks">
        @foreach(['hit' => 'Hit', 'new' => 'New', 'recommended' => 'Recommended'] as $field => $value)

            <label for="{{ $field }}">{{ $value }}</label>
            <input name="{{ $field }}" id="{{ $field }}" type="checkbox"

                   @if(isset($product) && $product->$field === 1)
                        checked="checked"
                   @endif

            >

        @endforeach
    </div>

@endif
