<x-testHead>



    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ route('login') }}" method="POST" class="sign-in-form">
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
                    <h2 class="title">Accedi</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>

              <input type="text" name="email"id="email" placeholder="Email or Username" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" /><br>

            </div>
            <input type="submit" value="Accedi" class="btn solid " />
            <p class="social-text">Oppure accedi attraverso i social</p>
            <div class="social-media">
                <a href="#" class="social-icon">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            <p class="social-text">Torna al sito</p>
              <a href="{{ route('homepage') }}" class="social-icon">
                <i class="fa fa-home"></i>
            </a>
          </form>
          <form action="{{ route('register') }}" method="POST" class="sign-up-form">
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

            <h2 class="title">Registrati</h2>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Username" />
              </div>
              <div class="input-field">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="email" placeholder="Email" />
              </div>
              <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password" placeholder="Password" />
              </div>
              <div class="input-field">
                  <i class="fas fa-lock"></i>
                  <input type="password_confirmation" name="password_confirmation" placeholder="Conferma Password" />
              </div>
              <input type="submit" class="btn" value="Registrati" />
              <p class="social-text">Oppure accedi attraverso i social</p>
              <div class="social-media">
                  <a href="#" class="social-icon">
                      <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="#" class="social-icon">
                      <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#" class="social-icon">
                      <i class="fab fa-google"></i>
                  </a>
                  <a href="#" class="social-icon">
                      <i class="fab fa-linkedin-in"></i>
                  </a>
              </div>
              <p class="social-text">Torna al sito</p>
              <a href="{{ route('homepage') }}" class="social-icon">
                <i class="fa fa-home"></i>
            </a>
          </form>
      </div>
  </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Non sei ancora iscritto ?</h3>
                <p>
                    Entra in The Artisan's Corner !
                </p>
                <button class="btn transparent" id="sign-up-btn">
                    REGISTRATI
                </button>
            </div>

        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>Sei già uno di noi ?</h3>
                <p>
                    Entra subito e non perderti nemmeno un capolavoro !
                </p>
                <button class="btn transparent" type="submit" id="sign-in-btn">
                    ACCEDI
                </button>
            </div>

        </div>
    </div>
</div>


</x-testHead>
