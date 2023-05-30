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
                    <img class="logoMobile" src="/media/logoblack.png" alt="logo">
                    <h2 class="title">{{ __('ui.accedi') }}</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>

                        <input type="text" name="email"id="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Password" /><br>

                    </div>
                    <input type="submit" value="{{ __('ui.accedi') }}" class=" solid btn-accedi" />
                    {{-- <p class="social-text">Oppure accedi attraverso i social</p>
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
            </div> --}}
                    <p class="social-text">{{ __('ui.tornaAlSito') }}</p>
                    <a href="{{ route('homepage') }}" class="social-home">
                        <i class="fa fa-home  fa-2x"></i>
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
                    <img class="logoMobile" src="/media/logoblack.png" alt="logo">
                    <h2  class="title ">{{ __('ui.registrati') }}</h2>
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
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" />
                    </div>
                    <input type="submit" class="btn" value="{{ __('ui.registrati') }}" />
                    {{-- <p class="social-text">Oppure accedi attraverso i social</p>
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
              </div> --}}
                    <p class="social-text">{{ __('ui.tornaAlSito') }}</p>
                    <a href="{{ route('homepage') }}" class="social-home">
                        <i class="fa fa-home  fa-2x"></i>
                    </a>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">

                    <h3>{{ __('ui.registerText1') }}</h3>
                    <p>
                        {{ __('ui.registerText2') }}
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        {{ __('ui.registrati') }}
                    </button>
                </div>

            </div>
            <div class="panel right-panel">
                <div class="content">

                    <h3>{{ __('ui.accessText1') }}</h3>
                    <p>
                        {{ __('ui.accessText2') }}
                    </p>
                    <button class="btn transparent" type="submit" id="sign-in-btn">
                        {{ __('ui.accedi') }}
                    </button>
                </div>

            </div>
        </div>
    </div>


</x-testHead>
