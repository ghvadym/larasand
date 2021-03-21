@if(session('success'))

    <div class="container alert success">
        <div class="alert-body">
            <p>{{ session('success') }}</p>
        </div>
    </div>

@elseif(session('warning'))

    <div class="container alert warning">
        <div class="alert-body">
            <p>{{ session('warning') }}</p>
        </div>
    </div>

@endif