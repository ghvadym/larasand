<input name="code" type="text" placeholder="Code" value="{{ old('code') ?? $category->code ?? '' }}">
<input name="name" type="text" placeholder="Name" value="{{ old('name') ?? $category->name ?? '' }}">
<textarea name="description" cols="10" rows="3" placeholder="Description">{{ old('description') ?? $category->description ?? '' }}</textarea>
<input name="image" type="file">
