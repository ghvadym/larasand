<div class="cards__list row">
    @foreach($products as $product)

        <div class="col-md-4">
            <div class="card">
                <a href="{{ route('category', $product->category->code) }}/{{ $product->code }}" class="card__img">
                    <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                </a>
                <div class="card__info">
                    <a href="{{ route('category', $product->category->code) }}/{{ $product->code }}" class="card__name">{{ $product->name }}</a>
                    <a href="{{ route('category', $product->category->code) }}" class="card__cat">{{ $product->category->name }}</a>
                    <span class="card__price">${{ $product->price }}</span>
                </div>
            </div>
        </div>

    @endforeach
</div>
