@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible" id="alert" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
@elseif (session()->has('error'))
    <div class="alert alert-danger  alert-dismissible" id="alert" role="alert">
        {{ session()->get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
@elseif (count($errors) > 0)
    <div class="alert alert-danger  alert-dismissible" id="alert" role="alert">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }} </li>
            @endforeach
        </ul>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
@endif
