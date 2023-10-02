<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="container text-center">
        <h1 class="mt-3">Database</h1>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Birthday</th>
                    <th>Weight</th>
                    <th>Email</th>
                    <th>Profile Photo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($form as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->birthday }}</td>
                        <td>{{ $data->weight }}</td>
                        <td>{{ $data->email }}</td>
                        <td><img src="{{ asset('storage/photos/'.$data->photo) }}" style="max-width: 50px;" class="img-fluid rounded" alt="{{ $data->photo }}"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/') }}" class="btn btn-success mt-3">Back</a>
    </div>
</body>
</html>