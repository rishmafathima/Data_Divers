<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a User</h1>

    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{route('user.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Email : </label>
            <input type="text" name="u_email" placeholder="email" />
        </div>

        <br>

        <div>
            <label>Password : </label>
            <input type="password" name="u_pwd" placeholder="password" />
        </div>
        <br>
        <div>
            <label>User Type : </label>
            <input type="number" name="u_type" placeholder="Usertype" />
        </div>

        <br>
        <div>
            <input type="submit" value="Create"/>
        </div>

    </form>
</body>
</html>