<x-layout>

    <div class="container  py-5">
        <div class="forms-container">
            <div class="row justify-content-center">
          <div class="signin-signup col-12 col-md-6">


                <form action="{{ route('login') }}" method="POST" class="sign-in-form shadow p-3">
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
                    <h2 class="title text-center mb-5">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <label for="email" class="form-label">Inserisci indirizzo email</label>
                        <input type="email" name="email" class="form-control mb-5" id="email" >
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <div class="mb-3 form-check py-3">
                        <input type="checkbox" class="form-check-input" id="checkbox">
                        <label class="form-check-label" for="checkbox">Ricordami</label>
                    </div>
                <div class="container text-center ">
                    <button type="submit" class="btn btn-primary mb-3 solid">Accedi</button><br>
                    <a class="small fst-italic " href="{{ route('register') }}">Non sei registrato? Registrati</a>
                </div>
                    {{-- <p class="social-text">Or Sign in with social platforms</p>
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
                </form>
          </div>
        </div>
    </div>
</div>




</x-layout>
