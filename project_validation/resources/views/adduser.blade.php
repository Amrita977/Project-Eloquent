<!DOCTYPE html>
<html>
<head>
    <title>Add New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Add New User</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('user.store') }}">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="text" name="password" class="form-control" value="{{ old('password') }}">
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age" class="form-control" value="{{ old('age') }}">
            @error('age') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label>City</label>
            <input type="text" name="city" class="form-control" value="{{ old('city', 'Delhi') }}">
            @error('city') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
