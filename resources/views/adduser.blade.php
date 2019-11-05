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

<form method="post" action="{{action('UserController@insert')}}">
    Meno:<br>
    <input type="text" name="firstname" value="Mickey">
    <br>
    Priezvisko:<br>
    <input type="text" name="lastname" value="Mouse">
    <br>
    Email:<br>
    <input type="text" name="Email" value="@">
    <br>
    Vek:<br>
    <input type="number" name="age" value="30">
    <br><br>
    <input type="submit" value="Odoslat">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

</body>
</html>




