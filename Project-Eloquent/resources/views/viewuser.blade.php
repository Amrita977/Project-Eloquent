@extends('layout')

@section('title')
    User Detail
@endsection

@section('content')
<table class="table table-striped table-bordered">
    <tr>
        <th width="80px">Name :</th>
        <td>{{ $user->name }}</td>
    </tr>
    <tr>
        <th>Email :</th>
        <td>{{ $user->email }}</td>
    </tr>
    <tr>
        <th>Age :</th>
        <td>{{ $user->age }}</td>
    </tr>
    <tr>
        <th>City :</th>
        <td>{{ $user->city }}</td>
    </tr>
</table>

<a href="{{ route('user.index') }}" class="btn btn-danger">Back</a>
@endsection
