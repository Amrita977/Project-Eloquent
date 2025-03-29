<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container ">
        <h1 class="text-center">All Users List</h2>
            <a href="/newuser" class="btn btn-primary">Add New</a>

        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>View</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->city }}</td>
                    
                        <td><a href="{{ url('/singleuser/'.$user->id) }}" class="btn btn-primary">View</a></td>
                        <td><a href="{{ url('/deleteuser/'.$user->id) }}" class="btn btn-primary">Delete</a></td>
                        <td><a href="{{ url('/updateuser/'.$user->id) }}" class="btn btn-primary">Update</a></td>


                       
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div class="mt-5">
        <div>{{$users->links()}}</div> --}}
    </div>
</body>
</html>
