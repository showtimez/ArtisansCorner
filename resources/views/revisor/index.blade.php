<x-layout>

    <x-header>
        <div class="bgCarta">
            <h2 id="testo" class="text-center py-5 my-5 display-4 fw-bold" >{{ __('ui.revTitolo') }}</h2>
        </div>
        <script type="text/javascript">
            // testo da mostrare
            var testo = "{{ __('ui.revTitolo') }}";
            // output
            var output = "";
            // incrementatore
            var i = 0;
            // velocità di scrittura
            var speed = 120;
            // dichiaro la funzione
            function scrivi() {
                // creo l'output
                output += testo.charAt(i);
                // incremento
                i++;
                // scrittura
                document.getElementById("testo").innerHTML = output;
                // se è finito il testo
                if(i >= testo.length) {
                    // fine
                    clearInterval(s);
                }
            }
            // richiamo la funzione a intervalli
            s = setInterval("scrivi()",speed);
        </script>

    </x-header>

            <div class="container  my-5 py-5">
                <div class="row justify-content-center ">
                    <div class="col-12 justify-content-center   ">
                        
            <h3 class="text-center my-5 display-4">DA REVISIONARE</h3>
            <table class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                  <th scope="col">Titolo</th>
                  <th scope="col">Descrizione</th>
                  <th scope="col">Prezzo</th>
                  <th scope="col">Stato</th>
                  <th scope="col">Azioni</th>
                  <th scope="col">Dettaglio</th>
                </tr>
              </thead>
              <tbody>
                  @if($article_to_check)
                  @foreach ( $article_to_check as $element )
                  <tr>
                      <th scope="row">{{$element->title}}</th>
                          <td>{{$element->description}}</td>
                          <td>{{ __('ui.prezzo') }}: {{$element->price}}</td>
                          <td>{{ __('ui.stato') }}: {{$element->state}}</td>
                          <td class="d-flex justify-content-around">
                                  <form action="{{route('revisor.acceptArticle', ['article'=>$element])}}"method="POST">
                                  @csrf
                                  @method('PATCH')
                                  <button type="submit" class="btn btn-success shadow btn-ok">{{ __('ui.accetta') }}</button>
                                  </form>

                              <form action="{{route('revisor.rejectArticle', ['article'=>$element])}}"method="POST">
                                  @csrf
                                  @method('PATCH')
                                  <button type="submit" class="btn btn-danger shadow btn-no">{{ __('ui.rifiuta') }}</button>
                              </form>
                          </td>

                          {{-- <td>
                            
                           
                            <div class="text-center mb-5"><a href="{{route('article.show', compact('article'))}}" class="btn linkcustomAccent mt-3 px-5 shadow">{{ __('ui.dettagli') }}</a></div>
                           
                            
                          </td> --}}
                     
                   </tr>
                  @endforeach
                  @endif
                  
            
              </tbody>
            </table>  

            <h3 class="text-center my-5 display-4">ACCETTATI</h3>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Stato</th>
                    <th scope="col">Dettaglio</th>
                  </tr>
                </thead>
                <tbody>
                    @if($article_checked_ok)
                    @foreach ( $article_checked_ok as $element )
                    <tr>
                        <th scope="row">{{$element->title}}</th>
                            <td>{{$element->description}}</td>
                            <td>{{ __('ui.prezzo') }}: {{$element->price}}</td>
                            <td>{{ __('ui.stato') }}: {{$element->state}}</td>
                            <td>
                                <form action="{{route('revisor.nullArticle', ['article'=>$element])}}"method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success shadow">{{ __('ui.senToRev') }}</button>
                                </form>
                            </td>
                       
                     </tr>
                    @endforeach
                    @endif
                    
              
                </tbody>
              </table>  
              
  


              <h3 class="text-center my-5 display-4" >RIFIUTATI</h3>
              <table class="table table-striped table-hover table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Stato</th>
                    <th scope="col">Dettaglio</th>
                  </tr>
                </thead>
                <tbody>
                    @if($article_checked_ko)
                    @foreach ( $article_checked_ko as $element )
                    <tr>
                        <th scope="row">{{$element->title}}</th>
                            <td>{{$element->description}}</td>
                            <td>{{ __('ui.prezzo') }}: {{$element->price}}</td>
                            <td>{{ __('ui.stato') }}: {{$element->state}}</td>
                            <td>
                                <form action="{{route('revisor.nullArticle', ['article'=>$element])}}"method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success shadow">{{ __('ui.senToRev') }}</button>
                                </form>
                            </td>

            
                       
                     </tr>
                    @endforeach
                    @endif
                    
              
                </tbody>
              </table> 
                    </div>
                </div>
            </div>

   
              
              


            </div>
        </div>
    </div>
</x-layout>
