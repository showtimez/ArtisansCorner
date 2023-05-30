
<div class="container-fluid shadow rounded my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
                    <h3 class="text-center py-3 my-3 "> Compila il campo per inserire un articolo in vendita. </h3>
                    <p class="small text-muted">* Il tuo articolo verrà esaminato da un revisore prima di essere inserito</p>
                    <form class="p-5 justify-content-center" wire:submit.prevent="store">
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
                            <p for="description" class="form-label text-center">Dai un titolo *</p>
                            <input type="text" wire:model="title" class="form-control" id="title">
                        </div>

                        <div class="mb-3">
                            <p for="description" class="form-label text-center">Aggiungi una descrizione *</p>
                            <textarea wire:model="description" id="description" cols="30" rows="7" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <p for="temporary_images" class="form-label text-center">Inserisci una o più immagini *</p>
                            <input type="file" wire:model="temporary_images" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img" required/>
                            @error('temporary_images.*')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        @if (!empty($images))
                        Anteprima immagine:<br>
                            <div class="container d-flex ">
                                @foreach($images as $key => $image)

                                   <img class="image-preview" src="{{$image->temporaryUrl()}}" alt="preview">
                                        <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>

                                 @endforeach
                                </div>
                        @endif
                        <div class="mb-3">
                            <p for="category" class="form-label text-center">Seleziona una categoria *</p>
                            <select wire:model.defer="category" id="category" class="form-control">
                                <option value="">Seleziona</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-3">
                            <p for="state" class="form-label text-center">In che condizioni si trova il tuo oggetto? *</p>
                            <select for="state" wire:model.defer="state" id="state" class="form-control">
                                    <option value="">Seleziona</option>
                                    <option value="danneggiato">Danneggiato</option>
                                    <option value="ristrutturato">Ristrutturato</option>
                                    <option value="nuovo">Nuovo</option>
                            </select>

                        </div>

                        <div class="col-3 d-flex mb-3 align-items-center">
                            <label for="price" class="form-label px-2">€</label><input type="number" wire:model="price" class="form-control" id="price">

                        </div>
                        <div>
                            <button type="submit" class="btn btn-outline-dark ">Inserisci</button>
                            <button class="btn btn-outline-dark" ><a href="{{ route('article.index') }}"></a>Indietro</button>

                        </div>

                    </form>

        </div>
    </div>
</div>
