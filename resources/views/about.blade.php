<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
</head>
<body>
    <h1>About Me</h1>
    <p>Name: {{ $name }}</p>
    <p>Age: {{ $age }}</p>
    <p>Location: {{ $location }}</p>

        <a href="{{ route('skills') }}"><button>Skills</button></a>
        <a href="{{ route('hobbies') }}"><button>Hobbies</button></a>
</body>
</html>