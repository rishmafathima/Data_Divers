<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('user.create')}}">Create a User</a>
        </div>
        <br>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Password</th>
                <th>User Type</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->u_email}}</td>
                <td>{{$user->u_pwd}}</td>
                @if($user->u_type == 1)
                <td>Customer</td>   
                @else
                <td>Admin</td>  
                @endif
                <td>
                    <a href="{{route('user.edit', ['user' => $user])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('user.destroy', ['user' => $user])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>