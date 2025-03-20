<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('user.valter')}}">Página inicial</a>
    <a href="{{ route('user.valter') }}">Listar</a>
    <a href="{{route('user.show', ['user'=> $user->id])}}">Visualizar</a><br>
    <h2>Editar Usuário</h2>

    @if ($errors->any())
   
        @foreach ($errors->all() as $error)
        <p style="color:red;">
            {{$error}}
        </p>
       
    @endforeach
    @endif

    <form action="{{route('user.update', ['user' => $user->id])}}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label>
        <input type="text" name="name" placeholder="Nome do usuário" value="{{old('name', $user->name)}}"> <br><br>

        <label>E-mail:</label>
        <input type="email" name="email" placeholder="E-mail do usuário" value="{{old('email', $user->email)}}"> <br><br>

        <label>Senha:</label>
        <input type="password" name="password" placeholder="Senha do usuário"> <br><br>

        <button type="submit">Atualizar</button>
    </form>

</body>
</html>
