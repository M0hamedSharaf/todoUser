<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            background-color: #409870;
        }
    </style>
</head>

<body>
    <h1>Creat User</h1>
    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputName1" class="form-label">Name</label>
            <input type="Name" class="form-control" id="exampleInputName1" aria-describedby="NameHelp" name="name"
                value="{{ $user->name }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="email" value="{{ $user->email }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputphone1" class="form-label">Phone</label>
            <input type="number" class="form-control" id="exampleInputphone1" aria-describedby="phoneHelp"
                name="phone" value="{{ $user->phone }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlFile1">Avatar</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="avatar"
                value="{{ $user->avatar }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                value="{{ $user->password }}">
        </div>
        {{-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">bear with me please again password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation"
                value="{{ $user->password }}">
        </div> --}}

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
