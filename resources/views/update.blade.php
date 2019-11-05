<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRUD operácie</title>

    <!-- Styles -->
    <style>

    </style>
</head>
<body>

<br>
<button onclick="window.location.href='/projekt/public/getAddUserForm'">Pridat</button>
<button onclick="window.location.href='/projekt/public/deleteuser'">Vymazat</button>
<button onclick="window.location.href='/projekt/public/showall'">Zobrazit</button>
<br><br><br>

<form method="post" action="{{action('UserController@update', ['id' => $user->id]) }}">
    Meno:<br>
    <input type="text" name="firstname" value="{{$user->meno}}">
    <br>
    Priezvisko:<br>
    <input type="text" name="lastname" value="{{$user->priezvisko}}">
    <br>
    Email:<br>
    <input type="text" name="Email" value="{{$user->email}}">
    <br>
    Vek:<br>
    <input type="number" name="age" value="{{$user->vek}}">
    <br><br>
    <input type="submit" value="Upravit">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>




</body>
</html>
