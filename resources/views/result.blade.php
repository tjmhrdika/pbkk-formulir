<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="container text-center">
        <h1 class="mt-3">Result</h1>
        <div class="row justify-content-center">
            <div class="col-4">
                @if(session('status'))
                <div class="alert alert-success mt-4">
                    {{ session('status') }}
                </div>
                @endif
                @foreach($result as $key => $data)
                @if ($loop->last)
                <div class="card text-bg-dark mt-4">
                    <h5 class="card-header">{{ $key }}</h5>
                    <div class="card-body">
                    <img src="{{ asset('storage/photos/'.$data) }}" style="max-width: 150px;" class="img-fluid rounded" alt="{{ $data }}">
                    </div>
                </div>
                @break
                @endif
                <div class="card text-bg-dark mt-4">
                    <h5 class="card-header">{{ $key }}</h5>
                    <div class="card-body">
                        <p class="card-text">{{ $data }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <a href="{{ url('/') }}" class="btn btn-success mt-3">Back</a>
    </div>
</body>
</html>