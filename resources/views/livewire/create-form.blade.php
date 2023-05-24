
    <div class="container shadow rounded my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h2 class="text-center py-4">Inserisci un Annuncio</h2>

                    <form class="p-5" wire:submit.prevent="store">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session()->has('articleCreated'))
                            <div class="alert alert-success text-center">
                                {{ session('articleCreated') }}
                            </div>
                        @endif

                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label">Aggiungi un titolo</label>
                            <input type="text" wire:model="title" class="form-control" id="title">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea wire:model="description" id="description" cols="30" rows="7" class="form-control"></textarea>
                        </div>

                        {{-- @if ($image)
                            <div class="mt-3 text-center">
                                Anteprima immagine:<br>
                                <img width="250" src="{{ $image->temporaryUrl() }}">
                            </div>
                        @endif

                        <div class="mb-3">
                            <label for="image" class="form-label">Inserisci un' immagine</label>
                            <input type="file" wire:model="image" class="form-control" id="image">
                        </div> --}}

                        <div class="mb-3">
                            <label for="category" class="form-label">Categoria</label>
                            <select wire:model.defer="category" id="category" class="form-control">
                                <option value="">Scegli la categoria</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="state" class="form-label">In che condizioni si trova il tuo oggetto?</label>
                            <input type="text" wire:model="state" class="form-control" id="state">
                        </div>

                        <div class="col-3 d-flex mb-3 align-items-center">
                            <label for="price" class="form-label px-2">€</label><input type="number" wire:model="price" class="form-control" id="price">

                        </div>

                        <button type="submit" class="btn btn-dark">Inserisci il tuo annuncio</button>
                        <a href="{{ route('article.index') }}" class="ms-3 btn btn-outline-dark">Torna indietro</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
