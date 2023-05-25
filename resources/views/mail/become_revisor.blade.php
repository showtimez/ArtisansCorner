<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>L'utente {{ $user->name }}ha richiesto di diventare revisore</h1>
    <p>Ecco i suoi dati:</p>
    <p>{{ $user->name }}</p>
    <p>{{ $user->email }}</p>

    <p>Se vuoi renderlo revisore clicca quì:</p>
    <a href="{{ route('make.revisor', compact('user'))  }}">Rendi revisore</a>

</body>
</html>
