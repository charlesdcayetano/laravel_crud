@extends('layout.main')
@extends('layout.nav')
<title>View User</title>
@section('content')
<style>
    .container {
        max-width: 700px;
        margin: 0 auto;
        padding: 2rem;
        background: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .title {
        padding-bottom: 20px;
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
        background-color: #e9ecef;
    }

    .button-group {
        display: flex;
        justify-content: center;
        margin-top: 1.5rem;
    }

    .btn {
        padding: 0.5rem 2rem;
        border-radius: 5px;
        margin: 0 1rem;
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
</style>

<div class="container">
    <h2 class="title">Are you sure you want to delete User: #{{ $user->user_id }}?</h2>
    <form class="row g-4" action="/user/destroy/{{ $user->user_id }}" method="POST">
        @method('DELETE')
        @csrf
        <div class="col-md-12 form-group">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $user->first_name }} @if($user->middle_name){{ $user->middle_name[0] }}. @endif{{ $user->last_name }} @if($user->suffix_name){{ $user->suffix_name }} @endif" readonly>
        </div>
        <div class="col-md-6 form-group">
            <label for="birth_date" class="form-label">Birth Date</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ $user->birth_date }}" readonly>
        </div>
        <div class="col-md-6 form-group">
            <label for="gender_id" class="form-label">Gender</label>
            <input type="text" class="form-control" id="gender_id" name="gender_id" value="{{ $user->gender->gender }}" readonly>
        </div>
        <div class="col-md-12 form-group">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}" readonly>
        </div>
        <div class="col-md-6 form-group">
            <label for="contact_num" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contact_num" name="contact_num" value="{{ $user->contact_num }}" readonly>
        </div>
        <div class="col-md-6 form-group">
            <label for="email_address" class="form-label">Email Address</label>
            <input type="text" class="form-control" id="email_address" name="email_address" value="{{ $user->email_address }}" readonly>
        </div>
        <div class="col-md-12 form-group">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" readonly>
        </div>
        <div class="col-12 button-group">
            <a href="/user" class="btn btn-primary">Back</a>
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
    </form>
</div>
@endsection
