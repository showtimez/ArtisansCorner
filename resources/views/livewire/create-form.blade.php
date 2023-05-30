
<div class="container-fluid shadow rounded my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
                    <h3 class="text-center py-3 my-3 "> {{ __('ui.formTitolo') }} </h3>
                    <p class="small text-muted">* {{ __('ui.formSottoTitolo') }}</p>
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
                            <p for="description" class="form-label text-center">{{ __('ui.formArtTitolo') }} *</p>
                            <input type="text" wire:model="title" class="form-control" id="title">
                        </div>

                        <div class="mb-3">
                            <p for="description" class="form-label text-center">{{ __('ui.formArtDesc') }} *</p>
                            <textarea wire:model="description" id="description" cols="30" rows="7" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <p for="temporary_images" class="form-label text-center">{{ __('ui.formArtImages') }} *</p>
                            <input type="file" wire:model="temporary_images" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img" />
                            @error('temporary_images.*')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        @if (!empty($images))
                        {{ __('ui.formArtPreview') }}<br>
                            <div class="container d-flex ">
                                @foreach($images as $key => $image)

                                   <img class="image-preview" src="{{$image->temporaryUrl()}}" alt="preview">
                                        <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">{{ __('ui.formArtDelPrev') }}</button>

                                 @endforeach
                                </div>
                        @endif
                        <div class="mb-3">
                            <p for="category" class="form-label text-center">{{ __('ui.formArtCat') }} *</p>
                            <select wire:model.defer="category" id="category" class="form-control">
                                <option value="">{{ __('ui.seleziona') }}</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-3">
                            <p for="state" class="form-label text-center">{{ __('ui.formArtCond') }} *</p>
                            <select for="state" wire:model.defer="state" id="state" class="form-control">
                                    <option value="">{{ __('ui.seleziona') }}</option>
                                    <option value="danneggiato">{{ __('ui.danneggiato') }}</option>
                                    <option value="ristrutturato">{{ __('ui.ristrutturato') }}</option>
                                    <option value="nuovo">{{ __('ui.nuovo') }}</option>
                            </select>

                        </div>

                        <div class="col-3 d-flex mb-3 align-items-center">
                            <label for="price" class="form-label px-2">€</label><input type="number" wire:model="price" class="form-control" id="price">

                        </div>
                        <div>
                            <button type="submit" class="btn btn-outline-dark ">{{ __('ui.inserisci') }}</button>
                            <button class="btn btn-outline-dark" ><a href="{{ route('article.index') }}"></a>{{ __('ui.indietro') }}</button>

                        </div>

                    </form>

        </div>
    </div>
</div>
