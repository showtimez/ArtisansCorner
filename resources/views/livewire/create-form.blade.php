
<div class="container-fluid shadow rounded my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
                    <h3 class="text-center py-3 my-3 "> Il tuo articolo </h3>
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
                            <p for="description" class="form-label text-center">Dai un titolo</p>
                            <input type="text" wire:model="title" class="form-control" id="title">
                        </div>

                        <div class="mb-3">
                            <p for="description" class="form-label text-center">Aggiungi una descrizione</p>
                            <textarea wire:model="description" id="description" cols="30" rows="7" class="form-control"></textarea>
                        </div>

                        
                        <div class="mb-3">
                            <select wire:model.defer="category" id="category" class="form-control">
                                <option value="">Scegli la categoria </option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        
                        <div class="mb-3">
                            <label for="state" class="form-label">In che condizioni si trova il tuo oggetto?</label>
                            <select for="state" wire:model.defer="state" id="state" class="form-control">
                                    <option value="">Seleziona Condizioni </option>
                                    <option value="danneggiato">Danneggiato</option>
                                    <option value="ristrutturato">Ristrutturato</option>
                                    <option value="nuovo">Nuovo</option>
                            </select>
                            
                        </div>

                        <div class="col-3 d-flex mb-3 align-items-center">
                            <label for="price" class="form-label px-2">€</label><input type="number" wire:model="price" class="form-control" id="price">
                            
                        </div>

                        <div class="bg-danger">
                            <input type="file" wire:model="temporary_images" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img"/>
                            @error('temporary_images.*')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        @if (!empty($images))
                            
                                
                                    Anteprima immagine:<br>
                                    <div class="border border-4 border-info rounded shadow py-4 bg-dark">
                                        @foreach($images as $key => $image)
                                      
                                            <div class="img-preview mx-auto shadow rounded" style="background-image:url({{$image->temporaryUrl()}}); z-index:2;">
                                            </div>
                                            <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                                        
                                        @endforeach
                                    </div>
                                
                            
                        @endif

                        <div>
                            <button type="submit" class="btn btn-outline-dark ">Inserisci</button>
                            <button class="btn btn-outline-dark" ><a href="{{ route('article.index') }}"></a>Indietro</button>

                        </div>
                    </form>
                
        </div>
    </div>
</div>
