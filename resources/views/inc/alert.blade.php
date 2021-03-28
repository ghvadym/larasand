@if(session('success'))

    <div class="container alert success" role="alert">
        <div class="alert-body">
            <p>{{ session('success') }}</p>
        </div>
    </div>

@elseif(session('warning'))

    <div class="container alert warning" role="alert">
        <div class="alert-body">
            <p>{{ session('warning') }}</p>
        </div>
    </div>

@elseif(session('status'))

    <div class="container alert success" role="alert">
        <div class="alert-body">
            <p>{{ session('status') }}</p>
        </div>
    </div>

@endif