@extends('layout.main')
@extends('layout.nav')
<title>Update User</title>
@section('content')
<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 2rem;
        background: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .title {
        padding-bottom: 20px;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-control, .form-select {
        width: 100%;
        padding: 0.75rem;
        border-radius: 5px;
        border: 1px solid #ced4da;
        background-color: #fff;
    }

    .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 5px;
        margin: 0.5rem;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        color: white;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    @media (max-width: 768px) {
        .col-md-3, .col-md-4, .col-md-2, .col-md-7 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>

<div class='container'>
    <h2 class="title">Update User</h2>
    <form class="row g-4" action="/user/update/{{$user->user_id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="col-md-3 form-group">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{$user->first_name}}">
            @error ('first_name')<p class="text-danger">{{$message}}</p>@enderror
        </div>

        <div class="col-md-3 form-group">
            <label for="middle_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{$user->middle_name}}">
        </div>

        <div class="col-md-3 form-group">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{$user->last_name}}">
            @error ('last_name')<p class="text-danger">{{$message}}</p>@enderror
        </div>

        <div class="col-md-3 form-group">
            <label for="suffix_name" class="form-label">Suffix</label>
            <input type="text" class="form-control" id="suffix_name" name="suffix_name" value="{{$user->suffix_name}}">
        </div>

        <div class="col-md-3 form-group">
            <label for="birth_date" class="form-label">Birth Date</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{$user->birth_date}}">
            @error ('birth_date')<p class="text-danger">{{$message}}</p>@enderror
        </div>

        <div class="col-md-2 form-group">
            <label for="gender_id" class="form-label">Gender</label>
            <select class="form-select" id="gender_id" name="gender_id">
                @foreach ($genders as $gender)
                <option value="{{ $gender->gender_id }}" @if ($gender->gender_id == $user->gender_id) selected @endif>
                    {{ $gender->gender }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-7 form-group">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{$user->address}}">
            @error ('address')<p class="text-danger">{{$message}}</p>@enderror
        </div>

        <div class="col-md-4 form-group">
            <label for="contact_num" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contact_num" name="contact_num" value="{{$user->contact_num}}">
            @error ('contact_num')<p class="text-danger">{{$message}}</p>@enderror
        </div>

        <div class="col-md-4 form-group">
            <label for="email_address" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email_address" name="email_address" value="{{$user->email_address}}">
            @error ('email_address')<p class="text-danger">{{$message}}</p>@enderror
        </div>

        <div class="col-md-4 form-group">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{$user->username}}">
            @error ('username')<p class="text-danger">{{$message}}</p>@enderror
        </div>

        <div class="col-md-4 form-group">
            <label for="user_image" class="form-label">User Image</label>
            <input type="file" class="form-control" id="user_image" name="user_image">
            @error ('user_image')<p class="text-danger">{{$message}}</p>@enderror
        </div>

        <div class="col-12 text-center">
            <a href="/user" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection
