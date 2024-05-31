@extends('layout.main')

@section('content')
<style>
    .login {
        background-color: #dcdcdc;
        aspect-ratio: 1;
        width: max(33vw, 400px);
        padding: 20px; /* Add padding for spacing */
        border-radius: 10px; /* Add border radius for rounded corners */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
    }

    .container {
        height: 100vh; /* Adjust container height */
        display: flex;
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
    }

    .form-group {
        margin-bottom: 20px; /* Add margin bottom for spacing between fields */
    }

    .text-danger {
        margin-top: 5px; /* Add margin top for spacing */
        color: #dc3545; /* Change color to red */
        font-size: 14px; /* Increase font size for better visibility */
    }

    .btn-login {
        width: 100%; /* Make button full width */
        padding: 10px; /* Add padding for spacing */
        font-size: 16px; /* Increase font size for better readability */
        border: none; /* Remove border */
        border-radius: 5px; /* Add border radius for rounded corners */
        background-color: #007bff; /* Change background color to blue */
        color: #fff; /* Change text color to white */
        cursor: pointer; /* Add cursor pointer on hover */
        transition: background-color 0.3s; /* Add transition effect */
    }

    .btn-login:hover {
        background-color: #0056b3; /* Darken background color on hover */
    }
</style>

<div class="container">
    <div class="login p-4 rounded shadow-lg">
        <h1 class="text-center mb-4">User Login</h1>
        <form action="/login" method="post">
            @csrf
            <div class="form-group">
                <label class="form-label" for="username">Username</label>
                <input class="form-control" type="text" id="username" name="username">
                @error('username')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" id="password" name="password">
                @error('password')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <input class="mt-4 btn btn-login" type="submit" value="Login">
        </form>
    </div>
</div>
@endsection
