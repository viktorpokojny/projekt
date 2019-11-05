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

<table>
    @foreach($users as $user)
        <tr>
            <td>
                {{$user->meno}} {{$user->priezvisko}}
            </td>
            <td>
                {{$user->email}}
            </td>
            <td>
                <a href="{{action("UserController@show",['id' => $user->id])}}">Editovat</a>
            </td>
        </tr>
        @endforeach
</table>




</body>
</html>
