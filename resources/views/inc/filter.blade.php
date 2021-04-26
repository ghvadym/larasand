<div class="filter">
    <form action="{{ route('shop') }}" method="GET">
        <div class="filter__rows">
            <div class="filter__box">
                <div class="filter__item">
                    <input type="text" name="price_from" placeholder="Price from">
                </div>
                <div class="filter__item">
                    <input type="text" name="price_to" placeholder="Price to">
                </div>
            </div>
            <div class="filter__box">
                <div class="filter__item">
                    <label for="new">New</label>
                    <input type="checkbox" name="new" id="new">
                </div>
                <div class="filter__item">
                    <label for="hit">Hit</label>
                    <input type="checkbox" name="hit" id="hit">
                </div>
                <div class="filter__item">
                    <label for="recommended">Recommended</label>
                    <input type="checkbox" name="recommended" id="recommended">
                </div>
            </div>
            <div class="filter__box">
                <div class="filter__item">
                    <button class="btn md" type="submit">Filter</button>
                </div>
            </div>
        </div>
    </form>
</div>
