<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usuários</h1>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>-</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$users->links()}}
</body>
</html>