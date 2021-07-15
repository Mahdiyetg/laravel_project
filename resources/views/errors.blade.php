@if ($errors->any())
    <div class="alert alert-danger text-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-right">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
