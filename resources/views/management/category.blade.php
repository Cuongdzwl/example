<html>

<head>
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</head>

<body>
    <nav class="nav justify-content-left border ps-3 pt-2 pb-2">
        <h3>Category Management</h3>
        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
        <a class="nav-link" href="{{ url('/home') }}">Home</a>
    </nav>

    <div class="container mt-5">
        <div class="card mt-3">
            <div class="card-header">
                Management
            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Create At</th>
                            <th scope="col">Update At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->create_at}}</td>
                                <td>{{$item->update_at}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>    
            </div>
        </div>
    </div>

</body>

</html>
