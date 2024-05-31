@extends('layout.main')

@section('content')
<style>
    .container {
        padding: 5%;
    }
</style>

<div class="container">
    <h1>Add Gender</h1>
    <form class="row g-4" action="/gender/store" method="POST">
        @csrf
        <div class="col-md">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender" required>
            @error('gender')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="col-12 mt-3">
            <a href="/gender" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>
@endsection
