<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Username</title>
</head>
<body>
    <h1>Stored Username</h1>

    <p>Your username is: <strong>{{ $username }}</strong></p>

    <form action="{{ route('clear.session') }}" method="POST">
        @csrf
        <button type="submit">Clear Session</button>
    </form>

    <a href="/username">Go Back to Form</a>
</body>
</html>
