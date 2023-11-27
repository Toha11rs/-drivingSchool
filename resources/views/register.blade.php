<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>

<h2>User Registration</h2>

@if(session('status'))
    <p>{{ session('status') }}</p>
@endif

<ul>
    @foreach($errors->all() as $message)
        <li>{{$message}}</li>
    @endforeach
</ul>

    <form method="POST" novalidate action="{{ route('register') }}">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ old('name') }}" required autofocus>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>

    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" name="password_confirmation" id="password_confirmation" required>

    <button type="submit">Register</button>
</form>

</body>
</html>
