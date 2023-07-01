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
    <form action="{{ route('users.destroy',$id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')<br>
        <h2>Are You Sure?</h2>
        <br>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Delete</button>
        </div>
        <div class="col-12">
            <a href="{{route('back')}}" class="btn btn-primary">Back</a>
        </div>

    </form>
</div>
</body>
</html>
