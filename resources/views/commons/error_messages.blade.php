@if (count($errors) > 0)
    <ul class="uk-alert-danger">
        @foreach ($errors->all() as $error)
            <li class="">{{ $error }}</li>
        @endforeach
    </ul>
@endif