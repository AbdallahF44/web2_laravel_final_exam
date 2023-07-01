<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>{{$title}}</title>
</head>
<body>
<div class="container mt-2">
    <br>
    @guest()
        <a class="btn btn-primary" href="" role="button">Sign Up</a>
        <a class="btn btn-primary" href="" role="button">Log IN</a>
    @endguest

    <br>
<br><br><a class="btn btn-primary" href="{{route('users.create')}}" role="button">Create User</a>
<br><br>
<table class="table table-dark table-striped table-bordered">
    <thead>
    <tr>
        <th>User #id</th>
        <th>User Name</th>
        <th>User Email</th>
        <th>User Mobile</th>
        <th>User Address</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->mobile }}</td>
            <td>{{ $user->address }}</td>
{{--            <td>--}}
{{--                <form action="{{ route('users.delete',$user->id) }}" method="Post">--}}
{{--                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                    <button type="submit" class="btn btn-danger">Delete</button>--}}
{{--                </form> </td>--}}
            <td>
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('users.delete',$user->id) }}">Delete</a>
                 </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
</body>
</html>
