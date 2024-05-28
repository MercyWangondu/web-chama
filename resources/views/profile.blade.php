@extends('layouts.app')

@section('content')
<div class="profile-details">
    <h2>Your Profile</h2>
    <p><strong>Name:</strong> {{ $user->Name }}</p>
    <p><strong>ID Number:</strong> {{ $user->id_number }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Profile Photo:</strong></p>
    @if($user->profile_photo_path)
        <img src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="Profile Photo" width="150">
    @else
        <p>No profile photo uploaded.</p>
    @endif
</div>

<div class="profile-actions">
    <h2>Edit Profile</h2>
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $user->Name }}" required>

        <label for="id_number">ID Number:</label>
        <input type="text" id="id_number" name="id_number" value="{{ $user->id_number }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required>

        <label for="profile_photo">Profile Photo:</label>
        <input type="file" id="profile_photo" name="profile_photo">

        <button type="submit">Update Profile</button>
    </form>

    <h2>Delete Account</h2>
    <form action="{{ route('profile.destroy') }}" method="POST">
        @csrf
        <button type="submit">Delete Account</button>
    </form>


    <h2>Logout</h2>
    <form action="{{ route('logout.confirm') }}" method="GET">
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>
@endsection