@extends('layout.main')
<!-- @extends('layout.nav') -->
@section('content')

<style>
    .container {
        padding: 2rem;
        border: 1px solid #ccc;
        border-radius: 10px;
        margin-top: 2rem;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .btn {
        padding: 0.5rem 1rem;
        margin: 0.2rem;
    }

    .image-fluid {
        margin: 0.5rem;
        aspect-ratio: 1 / 1;
        border-radius: 50%;
        width: 100px;
        height: 100px;
        object-fit: cover;
    }

    .search-bar {
        margin-bottom: 1rem;
    }

    .table-responsive {
        margin-top: 1rem;
    }

    .table thead th {
        text-align: center;
        vertical-align: middle;
    }

    .table tbody td {
        text-align: center;
        vertical-align: middle;
    }

    .pagination {
        justify-content: center;
        margin-top: 1rem;
    }
</style>

<div class="container">
    <h1 class="text-center">List of Users</h1>
    <form class="d-flex search-bar" action="/home">
        <label class="d-none" for="search">Search</label>
        <input class="form-control me-2" type="search" name="search" id="search" placeholder="Search">
        <button class="btn btn-primary" type="submit">Search</button>
    </form>

    <div>
        @include('include.messages')
    </div>

    <div class="table-responsive">
        {{ $users->withQueryString()->links() }}
        <div class="mb-3">
            <a href="/user/create" class="btn btn-primary float-end">Add User</a>
        </div>
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>User Profile</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Email Address</th>
                    <th class="col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td><img class="image-fluid" src="{{ $user->user_image ? asset('storage/img/user/' . $user->user_image) : 'https://www.shutterstock.com/image-vector/default-avatar-profile-icon-social-600nw-1677509740.jpg' }}" alt="User Image"></td>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->middle_name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->gender->gender}}</td>
                    <td>{{$user->email_address}}</td>
                    <td>
                        <a href="/user/show/{{$user->user_id}}" class="btn btn-primary">View</a>
                        <a href="/user/edit/{{$user->user_id}}" class="btn btn-warning">Update</a>
                        <a href="/user/delete/{{$user->user_id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
