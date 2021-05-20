<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>


    <div class="container mt-5 mb-5">
        <div class="row justify-content-between">
            <div class="col-4 float-start text-start">
                <h2>Posts</h2>
            </div>
            <div class="col-4 float-end text-end">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create Post</a>
            </div>
        </div>

    </div>




    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="container mt-5">
        <table class="table table-bordered">
            <tr>
                <th width="20px" class="text-center">No</th>
                <th>Title</th>
                <th width="280px" class="text-center">Action</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td class="text-center">{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td class="text-center">
                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                        <a class="btn btn-info btn-sm" href="{{ route('users.show',$user->id) }}">Show</a>

                        <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$user->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>




    {!! $users->links() !!}

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>


</body>

</html>
