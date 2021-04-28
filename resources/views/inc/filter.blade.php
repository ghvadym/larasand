<div class="filter">
    <form action="{{ route('shop') }}" method="GET">
        <div class="filter__rows">
            <div class="filter__box">
                <div class="filter__item">
                    <input type="text" name="price_from" placeholder="Price from" value="{{ request()->price_from }}">
                </div>
                <div class="filter__item">
                    <input type="text" name="price_to" placeholder="Price to" value="{{ request()->price_to }}">
                </div>
            </div>
            <div class="filter__box">
                <div class="filter__item">
                    <label for="new">New</label>
                    <input type="checkbox" name="new" id="new" @if(request()->has('new')) checked @endif>
                </div>
                <div class="filter__item">
                    <label for="hit">Hit</label>
                    <input type="checkbox" name="hit" id="hit"@if(request()->has('hit')) checked @endif>
                </div>
                <div class="filter__item">
                    <label for="recommended">Recommended</label>
                    <input type="checkbox" name="recommended" id="recommended"@if(request()->has('recommended')) checked @endif>
                </div>
            </div>
            <div class="filter__box">
                <div class="filter__item">
                    <button class="btn md" type="submit">Filter</button>
                    <a href="{{ route('shop') }}" class="btn md">Clear</a>
                </div>
            </div>
        </div>
    </form>
</div>
