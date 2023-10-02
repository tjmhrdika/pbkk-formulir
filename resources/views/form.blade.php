<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Biodata Form</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div class="container text-center">
        <h1 class="mt-3">Biodata Form</h1>
        <div class="row justify-content-center">
            <div class="col-4">
                <form action="{{ url('form') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" autofocus>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label>Birthday</label>
                        <input type="date" name="birthday" value="{{ old('birthday') }}" class="form-control @error('birthday') is-invalid @enderror" autofocus>
                        @error('birthday')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label>Weight</label>
                        <input type="text" name="weight" value="{{ old('weight') }}" placeholder="in kg" class="form-control @error('weight') is-invalid @enderror" autofocus>
                        @error('weight')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" autofocus>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label>Profile Photo</label>
                        <input type="file" name="photo" value="{{ old('photo') }}" accept="image/*" class="form-control @error('photo') is-invalid @enderror" autofocus>
                        @error('photo')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success mt-4">Submit</button>
                </form>
                <a href="{{ url('/') }}" class="btn btn-success mt-3">Back</a>
            </div>
        </div>
    </div>
</body>
</html>