<div class="container alert warning" role="alert">
    <div class="alert-body">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach

{{--        <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--            <span aria-hidden="true">&times;</span>--}}
{{--        </button>--}}
    </div>
</div>
