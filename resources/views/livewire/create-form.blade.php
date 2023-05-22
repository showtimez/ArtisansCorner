<div>
    <form wire:submit.prevent="store">
        @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label for="title" class="form-label">Inserisci il Titolo</label>
                <input type="text" name="title" class="form-control" id="title" >
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Inserisci il Titolo</label>
                <input type="text" name="password" class="form-control" id="password">
            </div>
    </form>
</div>
