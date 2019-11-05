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



<h2>Zadajte ID: </h2>
<form action="{{action('UserController@delete')}}">
    <input type="text" name="id" value="1" >
    <input type="submit">
</form>





</body>
</html>
