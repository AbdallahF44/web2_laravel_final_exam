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
    <form action="{{ route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" class="form-control" name="name" value="{{$user->name}}">
            @error('name')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email" value="{{$user->email}}">
            @error('email')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="inputAddress" name="mobile"  value="{{$user->mobile}}">
            @error('mobile')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress2" name="address" value="{{$user->address}}">
            @error('address')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>
        <br><br>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>

    </form>
</div>
</body>
</html>
