<x-layout>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">


            <form action="{{ route('register') }}" method="POST" class="p-5 shadow">
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

                <h2 class="text-center">Sign up</h2>
        <div class="mb-3">
            <i class="fas fa-user"></i>
          <label for="name" class="form-label">Nome Utente</label>
          <input type="text" name="name" class="form-control" id="name" >
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Inserisci indirizzo email</label>
          <input type="email" name="email" class="form-control" id="email" >
        </div>

        <div class="mb-3">
            <i class="fas fa-lock"></i>
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="password">
        </div>

        <div class="mb-3">
            <i class="fas fa-lock"></i>
            <label for="password_confirmation" class="form-label">Conferma password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
          </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="checkbox">
          <label class="form-check-label" for="checkbox">Ricordami</label>
        </div>
        <div class="container text-center">
            <button type="submit" class="btn btn-primary mb-3">Registrati</button><br>
            <a class="small fst-italic" href="{{ route('login') }}">Sei già registrato? Accedi</a>
        </div>

      </form>
    </div>
</div>
</div>


</x-layout>
