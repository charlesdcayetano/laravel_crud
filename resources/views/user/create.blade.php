@extends('layout.main')
@extends('layout.nav')
<title>Add a User</title>
@section('content')
<style>
    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 2rem;
        background: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .title {
        padding-bottom: 1.5rem;
        text-align: center;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-control {
        width: 100%;
        padding: 0.75rem;
        border-radius: 5px;
        border: 1px solid #ced4da;
    }

    .form-control:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .text-danger {
        color: #e74c3c;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    .btn {
        padding: 0.5rem 1rem;
        border-radius: 5px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }
</style>

<div class="container">
    <h2 class="title">Add User</h2>
    <form class="row g-4" action="/user/store" method="POST">
        @csrf
        {{-- First Name --}}
        <div class="col-md-6 form-group">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
            @error ('first_name')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        {{-- Middle Name --}}
        <div class="col-md-6 form-group">
            <label for="middle_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ old('middle_name') }}">
        </div>
        {{-- Last Name --}}
        <div class="col-md-6 form-group">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
            @error ('last_name')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        {{-- Suffix --}}
        <div class="col-md-6 form-group">
            <label for="suffix_name" class="form-label">Suffix</label>
            <input type="text" class="form-control" id="suffix_name" name="suffix_name" value="{{ old('suffix_name') }}">
        </div>
        {{-- Birthday --}}
        <div class="col-md-6 form-group">
            <label for="birth_date" class="form-label">Birth Date</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ old('birth_date') }}">
            @error ('birth_date')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        {{-- Gender --}}
        <div class="col-md-6 form-group">
            <label for="gender_id" class="form-label">Gender</label>
            <select class="form-control" id="gender_id" name="gender_id">
                @foreach ($genders as $gender)
                <option value="{{ $gender->gender_id }}">{{ $gender->gender }}</option>
                @endforeach
            </select>
        </div>
        {{-- Address --}}
        <div class="col-md-12 form-group">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}"> 
            @error ('address')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        {{-- Contact Number --}}
        <div class="col-md-6 form-group">
            <label for="contact_num" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contact_num" name="contact_num" value="{{ old('contact_num') }}">
            @error ('contact_num')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        {{-- Email Address --}}
        <div class="col-md-6 form-group">
            <label for="email_address" class="form-label">Email Address</label>
            <input type="text" class="form-control" id="email_address" name="email_address" value="{{ old('email_address') }}">
            @error ('email_address')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        {{-- Username --}}
        <div class="col-md-6 form-group">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}">
            @error ('username')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        {{-- Password --}}
        <div class="col-md-6 form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            @error ('password')<p class="text-danger">{{ $message }}</p>@enderror
        </div>
        {{-- Confirm Password --}}
        <div class="col-md-6 form-group">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
        </div>
        {{-- Buttons --}}
        <div class="col-12 d-flex justify-content-between">
            <a href="/user" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>
@endsection
