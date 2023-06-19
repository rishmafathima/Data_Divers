<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Customer</h1>

    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{route('user.update', ['user' => $user])}}">
        @csrf
        @method('put')
        <div>
            <label>Email : </label>
            <input type="text" name="u_email" placeholder="email" value="{{$user->u_email}}" />
        </div>

        <br>

        <div>
            <label>Password : </label>
            <input type="password" name="u_pwd" placeholder="password" value="{{$user->u_pwd}}" />
        </div>
        <br>
        <div>
            <label>User Type : </label>
            <input type="number" name="u_type" placeholder="Usertype" value="{{$user->u_type}}" />
        </div>

        <br>
        <div>
            <input type="submit" value="Edit"/>
        </div>

    </form>
</body>
</html>