<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>user table</title>
</head>

<body>

    <div>
        <nav class="navbar navbar-dark bg-primary">

            <div class="container-fluid">
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">My App</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">USER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="role">ROLE</a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form action="{{ route('index') }}" method="POST">
                    @csrf



                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        <span class="text-danger">
                            @error('name')
                                {{ 'name is required' }}
                            @enderror
                        </span>
                    </div>


                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <span class="text-danger">
                            @error('email')
                                {{ 'email is required' }}
                            @enderror
                        </span>
                    </div>

                    <label>Roles</label>
                    <select class="">

                        @foreach ($role as $rol)
                            <option value="{{ $rol->id }}">{{ $rol->role }}</option>
                        @endforeach
                    </select>

                    <br><br>

                </form>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-sm-6">

                <br><br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>

                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>


                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>

                                <td>{{ $user->email }}</td>
                                <td>
                                    @foreach ($user->roles as $role)
                                        <ul>
                                            <li>{{ $role->role }}</li>
                                        </ul>
                                    @endforeach


                                <td>
                                    <a href="{{ url('/edit', $user->id) }}" class="btn btn-info btn-sm">EDIT</a>
                                    <a href="{{ url('/delete', $user->id) }}" class="btn btn-danger btn-sm">DELETE</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>

                <style>
                    .w-5 {
                        display: none;

                    }
                </style>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>


</html>
